<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class infoContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomInfo', TextType::class,array('required' => false,))
            ->add('prenomInfo',TextType::class,array('required' => false,))
            ->add('emailInfo', EmailType::class,array('required' => false,))
            ->add('telephoneInfo',TelType::class,array('required' => false,))
            ->add('adresseInfo',TextType::class,array('required' => false,))
            ->add('messageInfo', TextareaType::class,array('required' => false,));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\infoContact'


        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_infocontact';
    }


}
