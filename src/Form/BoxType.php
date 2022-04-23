<?php

namespace App\Form;

use App\Entity\Box;

use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BoxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('link_img', FileType::class, [
                'label' => false,
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/gif',
                            'image/x-icon',
                            'image/jpeg',
                            'image/png'
                        ],
                        'mimeTypesMessage' => "Cette image n'est pas valide"
                    ])
                ]
            ])
            ->add('text1')
            ->add('text2')
            ->add('text3')
            ->add('link_web')
            ->add('colortext')
            ->add('fontsize')
            ->add('line')
            ->add('row')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Box::class,
            'translation_domain' => 'forms'
        ]);
    }
}
