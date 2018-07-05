<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ErreurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeErreur', ChoiceType::class, array(
                'choices' => [
                    '00' => 'no error',
                    '01' => 'application is busy (is not used)',
                    '02' => 'general application error',
                    '03' => 'alarm in the application / atypical behaviour',
                    '04' => 'low battery level',
                    '3' => 'fatal permanent error (only in combination)',
                    '4' => 'minor temporary error (only in combination)',
                    '40' => 'fatal device error (permanent)',
                    '80' => 'parameters outside the operating range (temporary error)',
                    '136' => 'permanent break in communication',
                    '144' => 'temporary break in communication',
                ]
            ))
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Erreur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_erreur';
    }


}
