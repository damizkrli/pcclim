<?php

namespace App\Form;

use App\Entity\Contact;
use App\Validator\Constraints as AppAssert;
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
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => "Votre nom doit contenir plus de {{ limit }} lettres.",
                        'maxMessage' => "Votre nom doit contenir moins de {{ limit }} lettres."
                    ]),
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre Nom*',
                    'required' => true,
                ]
            ])
            ->add('lastname', TextType::class, [
                'label'       => 'Prénom',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Votre prénom doit contenir plus de {{ limit }} lettres.',
                        'maxMessage' => 'Votre prénom doit contenir moins de {{ limit }} lettres.'
                    ])
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre Prénom*',
                    'required' => true,
                ],
            ])
            ->add('address', TextType::class, [
                'label'       => 'Adresse',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'L’adresse postale n’est pas valide. Veuillez vérifier et réessayer.',
                        'maxMessage' => 'L’adresse postale n’est pas valide. Veuillez vérifier et réessayer.',
                    ])
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre Adresse*',
                    'required' => true,
                ]

            ])
            ->add('postalCode', IntegerType::class, [
                'label'       => 'Code Postal',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                    new AppAssert\PostalCode\PostalCode()
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre Code Postal*',
                    'required' => true,
                ]
            ])
            ->add('city', TextType::class, [
                'label'       => 'Ville',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Le nom de la ville doit contenir plus de {{ limit }} lettres.',
                        'maxMessage' => 'Le nom de la ville doit contenir moins de {{ limit }} lettres.'
                    ])
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre Ville*',
                    'required' => true,
                ]
            ])
            ->add('email', TextType::class, [
                'label'       => 'Email',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                    new AppAssert\Email\Email()
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre Email*',
                    'required' => true,
                ]
            ])
            ->add('phone', TextType::class, [
                'label'       => 'Téléphone',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                    new AppAssert\PhoneNumber\PhoneNumber()
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre Numéro de Téléphone*',
                    'required' => true,
                ]
            ])
            ->add('message', TextareaType::class, [
                'label'       => 'Votre Message',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Ce champ est obligatoire."
                    ]),
                ],
                'attr'        => [
                    'class' => 'mt-5 w-full bg-white rounded border border-gray-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out',
                    'placeholder' => 'Votre message...*',
                    'required' => true,
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer votre message',
                'attr'  => [
                    'class' => 'bg-transparent hover:bg-blue border-blue text-blue font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
