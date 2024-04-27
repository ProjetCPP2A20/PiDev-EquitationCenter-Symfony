<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
          ->add('name')

          ->add('lastname')
            ->add('email')
            ->add('password',RepeatedType::class, [
              'type'=>PasswordType::class,
              'first_options'=>['label'=>'Mot de passe'],
              'second_options'=>['label'=>'Confirmez le mot de passe']   ])
            ->add('address')
            ->add('numTel')
            ->add('imagedata',FileType::class,[
      'attr' => ['placeholder' => '','maxlength' => 50,],
      'help' => ' .
                ','help_attr' => ['class' => 'mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0'],
     ])
          ->add('submit', SubmitType::class,['label'=>'Créer un compte'])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
