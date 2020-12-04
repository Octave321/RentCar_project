<?php

namespace App\Form;

use App\Entity\CommentPost;
use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Content')
            ->add('CreatedAt')
            ->add('Author')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CommentPost::class,
        ]);
    }
}
