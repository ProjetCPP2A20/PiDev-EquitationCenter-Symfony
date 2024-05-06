<?php

namespace App\Form;

use App\Entity\Activity;
use App\Entity\Activitysession;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitySessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('weekday', IntegerType::class)
            ->add('starttime', TimeType::class, [
                'input' => 'string', // This is to store the time as a string in the database
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control timepicker-input'], // Add this line
                // You can add more options if needed
            ])
            ->add('endtime', TimeType::class, [
                'input' => 'string', // This is to store the time as a string in the database
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control timepicker-input'], // Add this line

                // You can add more options if needed
            ])
            ->add('activityid', EntityType::class, [
                'class' => Activity::class,
                'choice_label' => 'title',
                'label' => 'Activity', // Add this line
                'attr' => ['class' => 'form-control form-select'], // Add this line
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activitysession::class,
        ]);
    }
}
