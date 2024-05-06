<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersFilterType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
      ->add('role', ChoiceType::class, [
        'choices'  => [
          'Admin' => 'ROLE_ADMIN',
          'Instructor' => 'ROLE_INSTRUCTOR',
          'Vet' => 'ROLE_VET',
          'Client' => 'ROLE_CLIENT'
        ],
      ]);
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      // Configure your form options here
    ]);
  }
}
