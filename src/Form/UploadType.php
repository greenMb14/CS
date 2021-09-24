<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre')
        ->add('premiertitre')
        ->add('deuxiemetitre')
        ->add('content',TextareaType::class,)
        ->add('contentA',TextareaType::class,)
        ->add('contentB',TextareaType::class,)
        ->add('fichier',FileType::class, array('label'=>'Image/Video'))
        ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
