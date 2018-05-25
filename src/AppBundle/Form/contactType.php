<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                    'choisissez' => 'null',
                    'Syndic' => 'Syndic',
                    'Locataire' => 'locataire',
                    'Autre' => 'Autre'
                ]))
            ->add('vousSouhaitez', ChoiceType::class, array(
                'choices'  => [
                    'choisissez' => 'null',
                    'maîtriser les consommations d’énergie' => 'maitriser les consommations d’energie',
                    "maîtriser les consommations d'eau" => 'maitriser les consommations d’energie'

                ]))
            ->add('civilitecontact', ChoiceType::class, array(
                'choices'  => [
                    'choisissez' => 'null',
                    'Madame' => 'Madame',
                    'Monsieur' => 'Monsieur'

                ]))
            ->add('nomContact')
            ->add('prenomContact')
            ->add('emailContact')
            ->add('phoneContact')
            ->add('adresseContact')
            ->add('nomSyndic')
            ->add('adresseSyndic')
            ->add('phoneSyndic')
            ->add('emailSyndic')
            ->add('nomResidence')
            ->add('adresseResidence')
            ->add('dateAG')
            ->add('nblogement')
            ->add('immeuble', ChoiceType::class, array(
                'choices'  => [
                    'choisissez' => 'null',
                    'Ancien' => 'Ancien',
                    'Neuf' => 'Neuf',
                    'Recent' => 'Recent'

                ]))
            ->add('message');
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
