<?php

namespace GincidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GincidentBundle\Entity\incident;

class incidentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
		 ->add('frs')
         ->add('Description', \Symfony\Component\Form\Extension\Core\Type\TextareaType::class, array('attr' => array('rows' => '5','cols' => '5')))
         ;
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GincidentBundle\Entity\incident'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gincidentbundle_incident';
    }


  

    
    
    
    
    
}
