<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class contactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vousEtes', ChoiceType::class, array(
                'choices'  => [
                    'Choisissez' => 'null',
                    'Syndic' => 'Syndic',
                    'Locataire' => 'locataire',
                    'Autre' => 'Autre'
                ]))
            ->add('vousSouhaitez', ChoiceType::class, array(
                'choices'  => [
                    'Choisissez' => 'null',
                    'maîtriser les consommations d’énergie' => 'maitriser les consommations d’energie',
                    "maîtriser les consommations d'eau" => 'maitriser les consommations d’energie'

                ]))
            ->add('civilitecontact', ChoiceType::class, array(
                'choices'  => [
                    'Choisissez' => 'null',
                    'Madame' => 'Madame',
                    'Monsieur' => 'Monsieur'

                ]))
            ->add('nomContact', TextType::class)
            ->add('prenomContact')
            ->add('emailContact', EmailType::class)
            ->add('phoneContact',TelType::class)
            ->add('adresseContact')
            ->add('nomSyndic')
            ->add('adresseSyndic')
            ->add('phoneSyndic',TelType::class)
            ->add('emailSyndic',EmailType::class)
            ->add('nomResidence')
            ->add('adresseResidence')
            ->add('dateAG')
            ->add('nblogement')
            ->add('immeuble', ChoiceType::class, array(
                'choices'  => [
                    'Choisissez' => 'null',
                    'Ancien' => 'Ancien',
                    'Neuf' => 'Neuf',
                    'Recent' => 'Recent'

                ]))
            ->add('message',TextareaType::class,array());
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
