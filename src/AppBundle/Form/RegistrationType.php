<?php

namespace AppBundle\Form;

use AppBundle\Entity\Syndic;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{


    /**
     * {@inheritdoc} Including all fields from Registration entity.
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('email')
            ->add('email2')
            ->add('phone')
            ->add('phone2')
            ->add('syndics', EntityType::class, array(
                'class' => 'AppBundle:Syndic',
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
                'required' => false

            ))
            ->add('associationCoPros', EntityType::class, array(
                'class' => 'AppBundle:associationCoPro',
                'choice_label'=> 'name',
                'multiple' => true,
                'required' => false

            ))
            ->add('lots', EntityType::class, array(
                'class' => 'AppBundle:Lot',
                'choice_label'=> 'numero',
                'multiple' => true,
                'required' => false
            ))
            ->add('roles', ChoiceType::class, [
                'multiple' => true,
                'expanded' => true, // render check-boxes
                'choices' => [
                    'Administrateur' => 'ROLE_ADMIN',
                    'Syndicat' => 'ROLE_SYNDICAT',
                    'Copropriétaire' => 'ROLE_COPROPRIETAIRE',
                    'Association de copropriétaire' => 'ROLE_ASSOCOPRO',
                    'Propriétaire' => 'ROLE_PROPRIETAIRE',
                    'Locataire' => 'ROLE_LOCATAIRE',

                ],
        ]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


}
