<?php

namespace App\Form;

use App\Entity\Horse;
use App\Entity\Medicalvisit;
use App\Entity\Users;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
class VisitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextType::class,[
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'attr' => ['placeholder' => 'Enter description'],
                'help' => 'Input description',
                'label' => 'description',
                'constraints' => [
                    new Assert\Length([
                        'max' =>30,
                        'maxMessage' => 'The description must be less than {{ limit }} characters long',
                    ])
                ]
            ])
             ->add('idhorse',EntityType::class,[
                'class' => Horse::class,
                'choice_label' => 'name',
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],

                'attr' => ['placeholder' => 'Select an activity type',"help" => "The activity type must be one of the following types."],
            ])

            ->add('idvet', EntityType::class, [
                'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
                'label_attr'=> ['class' => 'mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row'],
                'class' => Users::class,
                'choice_label' => 'name', // Display the 'name' attribute in the dropdown options                'label' => 'Vet',
                'attr' => ['class' => 'form-control tom-select w-full single plugin-dropdown_input'], // Add this line
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.role = :role')
                        ->setParameter('role', 'Vet');
                },
            ])
            ->add('Submit', SubmitType::class,[
                'attr' => ['placeholder' => 'Add Commentaire',"value" => "Add Commentaire"],
                'label' => 'Add Commentaire',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medicalvisit::class,
        ]);
    }
}