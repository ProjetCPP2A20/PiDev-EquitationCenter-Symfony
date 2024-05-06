<?php

namespace App\Form;

use App\Entity\Horse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
class HorseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Enter horse name'],
            ])
            ->add('datepension', DateType::class,[
                'widget' => 'single_text',
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Enter pension date'],
                'constraints' => [
                    new Assert\LessThanOrEqual([
                        'value' => 'today',
                        'message' => 'The date cannot be in the future',
                    ]),
                ]
            ])
            ->add('breed', TextType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Enter breed'],
            ])
            ->add('isavailable', ChoiceType::class, [
                'choices'  => [
                    'Yes' => true,
                    'No' => false,
                ],
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Is the horse available?'],
            ])

            ->add('Submit', SubmitType::class,[
                'attr' => ['placeholder' => 'Add Commentaire',"value" => "Add Horse"],
                'label' => 'Add a horse',
            ]);



    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Horse::class,
        ]);
    }
}