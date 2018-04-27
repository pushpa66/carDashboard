<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('quarter',ChoiceType::class,array(
                'choices'=>array(
                    1=>'1',
                    2=>'2',
                    3=>'3',
                    4=>'4'
                )
            ))
            ->add('product')
            ->add('value')
            ->add('customer')
            ->add('status',ChoiceType::class,array(
                'choices'=>array(
                    'In-Progress'=>'In progress',
                    'Won'=>'Won',
                    'Lost'=>'Lost',
                    'Issue'=>'Issue'
                )
            ))
            ->add('statusScore')
            ->add('competition')
            ->add('notes')
            ->add('save', SubmitType::class)

        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'app_bundle_product_type';
    }
}
