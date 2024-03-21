<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label'       => 'Nom',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100
                    ])
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label'       => 'Prénom',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100
                    ])
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ],
            ])
            ->add('address', TextType::class, [
                'label'       => 'Adresse',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100
                    ])
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ]
            ])
            ->add('postalCode', IntegerType::class, [
                'label'       => 'Code Postal',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        5,
                    )
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ]
            ])
            ->add('city', TextType::class, [
                'label'       => 'Ville',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100
                    ])
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ]
            ])
            ->add('email', TextType::class, [
                'label'       => 'Email',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100
                    ])
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ]
            ])
            ->add('phone', IntegerType::class, [
                'label'       => 'Téléphone',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100
                    ])
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label'       => 'Votre Message',
                'constraints' => [
                    new Assert\NotBlank(),
                ],
                'attr'        => [
                    'class' => 'w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out'
                ]
            ])
//            ->add('submit', SubmitType::class, [
//                'label' => 'Envoyer votre message',
//                'attr'  => [
//                    'class' => 'bg-transparent hover:bg-blue border-blue text-blue font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded'
//                ]
//            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
