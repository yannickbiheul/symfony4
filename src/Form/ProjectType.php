<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre du projet',
                'attr' => [
                    'placeholder' => 'Mon titre',
                    'class' => 'mt-2',
                ]
            ])
            ->add('introduction', TextType::class, [
                'label' => 'Introduction du projet',
                'attr' => [
                    'placeholder' => 'Mon introduction',
                    'class' => 'mt-2',
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du projet',
                'attr' => [
                    'placeholder' => 'Ma description',
                    'class' => 'mt-2',
                ]
            ])
            ->add('image', UrlType::class, [
                'label' => 'Image du projet',
                'attr' => [
                    'placeholder' => 'Mon image',
                    'class' => 'mt-2',
                ]
            ])
            ->add('github', UrlType::class, [
                'label' => 'GitHub du projet',
                'attr' => [
                    'placeholder' => 'Mon GitHub',
                    'class' => 'mt-2',
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-info text-white mt-4'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
