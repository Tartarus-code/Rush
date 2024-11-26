<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\Coach;
use App\Entity\Cours;
use App\Entity\TypeCours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('heureDebut', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Heure de Début',
                'label_attr' => ['class' => 'form-label']
            ])
            ->add('heureFin', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Heure de Fin',
                'label_attr' => ['class' => 'form-label']
            ])
            ->add('capaciteMax', null, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Capacité Max',
                'label_attr' => ['class' => 'form-label']
            ])
            ->add('idCoach', EntityType::class, [
                'class' => Coach::class,
                'choice_label' => 'id',
                'attr' => ['class' => 'form-select'],
                'label' => 'Coach',
                'label_attr' => ['class' => 'form-label']
            ])
            ->add('idEtat', EntityType::class, [
                'class' => Etat::class,
                'choice_label' => 'id',
                'attr' => ['class' => 'form-select'],
                'label' => 'Etat',
                'label_attr' => ['class' => 'form-label']
            ])
            ->add('idTypeCours', EntityType::class, [
                'class' => TypeCours::class,
                'choice_label' => 'id',
                'attr' => ['class' => 'form-select'],
                'label' => 'Type de Cours',
                'label_attr' => ['class' => 'form-label']
            ])
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'btn btn-outline-primary mt-3'], 
                'label' => 'Valider'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
