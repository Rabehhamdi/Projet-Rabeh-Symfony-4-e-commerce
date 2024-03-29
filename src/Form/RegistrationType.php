<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
            ->add('nom')
            ->add('prenom')
            ->add('numtel')
            ->add('linkfb')
            ->add('linktw')
            ->add('linkins')
            ->add('adresseemail')
            ->add('adresse')
            ->add('datedenaissance')
            ->add('motdepasse',PasswordType::class)
            ->add('confirm_password',PasswordType::class)
             
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
