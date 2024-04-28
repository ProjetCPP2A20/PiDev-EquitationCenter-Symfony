<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\ProductOrder;
use App\Entity\Users;
use http\Client\Curl\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ProductOrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('price', IntegerType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Enter price',"help" => "The price must be positive."],
                'constraints' => [
                    new Assert\GreaterThan([
                        'value' => 0,
                        'message' => 'The price must be positive.',
                    ]),
                ],
                'help' => 'The price must be positive.'
            ])
            ->add('qty', IntegerType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Enter quantity',"help" => "The quantity must be greater than 0."],
                'constraints' => [
                    new Assert\GreaterThan([
                        'value' => 0,
                        'message' => 'The quantity must be positive.',
                    ]),
                ],
                'help' => 'The quantity must be positive.'
            ])
            ->add('status', TextType::class,[
                    'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                    'help' => 'The status must not be empty.',
                    'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                    'attr' => ['placeholder' => 'Enter status',"help" => "The status must not be empty."],
                    'constraints' => [
                        new Assert\NotBlank([
                            'message' => 'The status must not be empty.',
                        ]),
                    ]]
            )

            ->add('id_client', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a client',
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Select a client',"help" => "The client must be one of the following."],

            ])
            ->add('product_id', EntityType::class, [
                'class' => Product::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a product',
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Select a product pls',"help" => "The products must be one of the following."],
            ])

            ->add('Submit', SubmitType::class,[
                'attr' => ['placeholder' => 'Add ProductOrder',"value" => "Add ProductOrder"],
                'label' => 'Add ProductOrder',
            ]);


    }




    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProductOrder::class,
        ]);
    }
}