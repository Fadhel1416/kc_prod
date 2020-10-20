<?php

namespace GincidentBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

class solutionsType extends AbstractType
{
/**
     * {@inheritdoc}
     */
    
    
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
          ->add('description', \Symfony\Component\Form\Extension\Core\Type\TextareaType::class, array('attr' => array('rows' => '8','cols' => '8')) )

                ->add('tic')
     
                
                ;
    }
    
  /**
     * {@inheritdoc}
     */
  
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GincidentBundle\Entity\solutions'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gincidentbundle_solutions';
    }


}
