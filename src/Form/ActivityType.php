<?php

namespace App\Form;

use App\Entity\Activity;
use App\Validator\Constraints\AlwaysValid;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Date;

class ActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class,[
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],

                'widget' => 'single_text', // Ensure the date is rendered as a single text input
                'attr' => ['placeholder' => 'Select a date'],
                'help' => 'The date must be in the past.',
                'mapped' => false, // Disable mapping

            ])
            ->add('typeactivity', ChoiceType::class, [
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Select an activity type',"help" => "The activity type must be one of the following types."],
                'help' => 'The activity type must be one of the following types.',
                'choices' => [
                    "HORSE_RIDING_LESSONS" => "Leçons d'équitation",
                    "HIKES" => "Randonnées",
                    "HORSE_CARE_WORKSHOPS" => "Ateliers de soins aux chevaux",
                    "HORSE_ASSISTED_THERAPY" => "Thérapie assistée par les chevaux",
                    "PONY_WALKS" => "Promenades en poney",
                    "HORSE_TRAINING_CLINICS" => "Cliniques de formation des chevaux",
                    "COMPETITIVE_EVENTS" => "Événements compétitifs",
                    "HORSE_PENSION" => "Pension pour chevaux",
                    "PONY_PARTIES" => "Fêtes en poney",
                    "EDUCATIONAL_PROGRAMS" => "Programmes éducatifs"
                ],            ])
            ->add('title', TextType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],

                'attr' => ['placeholder' => 'Enter Activity Title',"help" => "The title must be at least 3 characters long."],
                'constraints' => [
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'The title must be at least {{ limit }} characters long.',
                    ]),
                ],
                'help' => 'The title must be at least 3 characters long.',
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0']
            ])

            ->add('description', TextareaType::class,[
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
            ->add('imageData', FileType::class,
                [
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],

                'attr' => ['placeholder' => 'Select an image',"help" => "The image must not be null."],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'mapped' => false,

                'help' => 'The image must not be null.',
                'constraints' => [
                    new Assert\NotBlank([
            'message' => 'The image data must not be null.',
        ]),

            ]
            ]
                )
            ->add('Submit', SubmitType::class,[
                'attr' => ['placeholder' => 'Add Activity',"value" => "Add Activity"],
                'label' => 'Add Activity',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activity::class,
        ]);
    }
}
