<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
      ->add('id', HiddenType::class, [
        'data' => '0',
      ])


      ->add('name',
        TextType::class,['attr' => ['placeholder' => '','maxlength' => 50],
        'help' => 'Pas de chiffre',
        'label' => 'Prénom',

      ])
      ->add('lastname',
        TextType::class, ['attr' => ['placeholder' => '','maxlength' => 50,],
          'help' => 'Pas de chiffre.',
          'label' => 'Nom',
        ])

      ->add('email',EmailType::class,[
        'attr' => ['placeholder' => '','maxlength' => 50],
        'help' => ' Valid email addresse.',

      ])
   /*   ->add('password',RepeatedType::class, [
        'attr' => ['placeholder' => 'pwd','maxlength' => 50],
        'type' => PasswordType::class,
        'first_options' => ['label' => 'Password'],
        'second_options' => ['label' => 'Confirm Password'],
        'help' => 'The password must be at least 8 characters long.',
        'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],


      ])*/
   ->add('password',PasswordType::class, [
     'attr' => ['placeholder' => '','maxlength' => 50],
     'help' => 'au moins 8 characters.',
     'help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
     'label' => 'Mot de passe',

   ])

      ->add('role', ChoiceType::class, [
        'choices'  => [
          'Admin' => 'Admin',
          'INSTRUCTOR' => 'INSTRUCTOR',
          'Vet' => 'Vet',
          'Client' => 'Client'
        ],
        'attr'=> ['placeholder' => 'Role']])
      ->add('numTel',TextType::class,[
        'attr' => ['placeholder' => '','maxlength' => 8,],
        'help' => 'au moins 8 chiffres.',
        'label' => 'Numéro de téléphone',
      ])
      ->add('address',TextType::class,[
        'attr' => ['placeholder' => '','maxlength' => 50,],
        'help' => " Adresse valide.",
        'label' => 'Adresse',
      ])
      ->add('imageData',FileType::class,[
        'attr' => ['placeholder' => '','maxlength' => 50,],
        'help' => 'Image .
                ','help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
        'label' => 'Image',
      ])

      -> add('submit', SubmitType::class,[
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
