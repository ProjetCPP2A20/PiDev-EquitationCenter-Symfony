<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],

                'attr' => ['placeholder' => 'Enter Product name',"help" => "The name must be at least 3 characters long."],
                'constraints' => [
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'The name must be at least {{ limit }} characters long.',
                    ]),
                ],
                'help' => 'The name must be at least 3 characters long.',
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0']
            ])
            ->add('price', IntegerType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Enter Monthly price in TND',"help" => "The price must be positive."],
                'constraints' => [
                    new Assert\GreaterThan([
                        'value' => 0,
                        'message' => 'The price must be positive.',
                    ]),
                ],
                'help' => 'The price must be positive.'
            ])
            ->add('description',TextareaType::class,[
                    'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                    'help' => 'The description must be at least 10 characters long.',
                    'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                    'attr' => ['placeholder' => 'Enter Activity Description',"help" => "The description must be at least 10 characters long."],
                    'constraints' => [
                        new Assert\Length([
                            'min' => 10,
                            'minMessage' => 'The description must be at least {{ limit }} characters long.',
                        ]),
                    ]]
            )
            ->add('stockqty', IntegerType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Stock quantity',"help" => "The stockquantity must be greater than 0."],
                'constraints' => [
                    new Assert\GreaterThan([
                        'value' => 0,
                        'message' => 'The stock quantity must be positive.',
                    ]),
                ],
                'help' => 'The stock quantity must be positive.'
            ])
            ->add('blobimage', FileType::class,
                [
                    'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],

                    'attr' => ['placeholder' => 'Select an image',"help" => "The image must not be null."],
                    'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                    'mapped' => false,

                    ])
            ->add('Submit', SubmitType::class,[
                'attr' => ['placeholder' => 'Add Product',"value" => "Add Product"],
                'label' => 'Add Product',
            ])
        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
