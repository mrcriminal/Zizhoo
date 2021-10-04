<?php

namespace App\Form;

use App\Entity\EmotioneleVraag;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmotioneleVragenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vragen')
            ->add('antwoord1')
            ->add('antwoord2')
            ->add('antwoord3')
            ->add('submit', SubmitType::class, array(
                'attr'   =>  array(
                    'style'   => 'float: right;'
                ))
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EmotioneleVraag::class,
        ]);
    }
}
