<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class SubscribeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('plainPassword', PasswordType::class, [
                'attr' => ['class' => 'form-control'],
                'mapped' => false,
            ])
            ->add('confirmPassword', PasswordType::class, [
                'attr' => ['class' => 'form-control'],
                'mapped' => false
            ])
            ->add('firstname', TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('lastname', TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('pseudo', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'translation_domain' => 'forms'
        ]);
    }
}
