<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
      ->add('email',EmailType::class,[
        'attr' => ['placeholder' => 'Email','maxlength' => 50],
        'help' => 'The email must be a valid email address.',
      ])
      ->add('password',RepeatedType::class, [
        'type' => PasswordType::class,
        'first_options' => ['label' => 'Password'],
        'second_options' => ['label' => 'Confirm Password'],
        'help' => 'The password must be at least 8 characters long.',
        'attr' => ['placeholder' => 'pwd','maxlength' => 50],

      ])

      ->add('name',TextType::class,[
        'attr' => ['placeholder' => 'Nom','maxlength' => 50],
        'help' => 'The name must be at least 3 characters long.',

      ])
      ->add('role', ChoiceType::class, [
        'choices'  => [
          'Admin' => 'Admin',
          'INSTRUCTOR' => ' INSTRUCTOR',
          'Vet' => ' Vet',
        ],
        'attr'=> ['placeholder' => 'Role']])
      ->add('lastname',
        TextType::class, ['attr' => ['placeholder' => 'Last Name','maxlength' => 50,],
          'help' => 'The last name must be at least 3 characters long.',
        ])
      ->add('address',TextType::class,[
        'attr' => ['placeholder' => 'Address','maxlength' => 50,],
        'help' => "The address must be at least 3 characters long.",

      ])
      ->add('numTel',TextType::class,[
        'attr' => ['placeholder' => 'Num Tel','maxlength' => 8,],
        'help' => 'The phone number must be 8 digits long.',
      ])
      ->add('imageData',FileType::class,[
        'attr' => ['placeholder' => 'Image','maxlength' => 50,],
        'help' => 'The image must be a valid image file.
                ','help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
      ])
      ->add('submit', SubmitType::class,[
        'attr' => ['placeholder' => 'Ajouter Utilisateur',"value" => "Ajouter Utilisateur"],
        'label' => 'Ajouter Utilisateur',
      ])
    ;
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      'data_class' => Users::class,
    ]);
  }
}
