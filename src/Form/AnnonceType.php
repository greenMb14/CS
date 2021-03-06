<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', TextType::class)
        ->add('category', TextType::class)
        ->add('resumer', TextareaType::class)
        ->add('file', FileType::class)
        ->add('firstTitle', TextType::class)
        ->add('ContentA', TextareaType::class)
        ->add('secondTitle', TextType::class , array('required' => false, ))
        ->add('ContentB', TextareaType::class , array('required' => false, ))
        ->add('thirtTitle', TextType::class , array('required' => false, ))
        ->add('ContentC', TextareaType::class, array('required' => false, ))
        ->add("Poster", SubmitType::class)  
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
