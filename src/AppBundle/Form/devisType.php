<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class devisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vousEtes', ChoiceType::class, array(
                'choices'  => [
                    'Syndic' => 'Syndic',
                    'Locataire' => 'locataire',
                    'Autre' => 'Autre'
                ]))
            ->add('vousSouhaitez', ChoiceType::class, array(
                'choices'  => [
                    'maîtriser les consommations d’énergie' => 'maitriser les consommations d’energie',
                    "maîtriser les consommations d'eau" => 'maitriser les consommations d’energie'

                ]))
            ->add('civilite', ChoiceType::class, array(
                'choices'  => [
                    'Madame' => 'Madame',
                    'Monsieur' => 'Monsieur'

                ]))
            ->add('nomContact')
            ->add('prenomContact')
            ->add('emailContact')
            ->add('telephoneContact')
            ->add('adresseContact')
            ->add('nomResidence')
            ->add('adresseResidence')
            ->add('dateAG')
            ->add('nbLogements')
            ->add('immeuble')
            ->add('message');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\devis'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_devis';
    }


}
