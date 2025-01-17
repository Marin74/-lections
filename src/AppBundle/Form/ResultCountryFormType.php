<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultCountryFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('registered',				IntegerType::class)
            ->add('abstention',				IntegerType::class)
			->add('voters',					IntegerType::class)
			->add('blankAndInvalidVotes',	IntegerType::class, array(
					'required'	=> false
				)
			)
			->add('blankVotes',				IntegerType::class, array(
					'required'	=> false
				)
			)
			->add('invalidVotes',			IntegerType::class, array(
					'required'	=> false
				)
			)
			->add('votesCast',				IntegerType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ResultCountry'
        ));
    }
}
