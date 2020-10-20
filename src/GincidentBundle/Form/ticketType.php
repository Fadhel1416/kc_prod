<?php

namespace GincidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class ticketType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
               
                ->add('name',null,[
	            'required'=> false ,'empty_data' => ' '])
                ->add('incidents')
                
                ->add('description', \Symfony\Component\Form\Extension\Core\Type\TextareaType::class, array('attr' => array('rows' => '3','cols' => '5'), 'required'=> false ,'empty_data' => ' '))
                ->add('incidents')

				->add('brochure', FileType::class, [
                'label' => 'Brochure(PDF file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
							
                        ],
                        'mimeTypesMessage' => 'telecharger a valide fichier svp',
                    ])
                ],
            ])

                ->add('reference',null,[
	            'required'=> false ,'empty_data' => ' '])
				->add('FicheTic', FileType::class, [
                'label' => 'FicheTic',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        
                        'mimeTypesMessage' => 'telecharger a valide fichier svp',
                    ])
                ],
            ])

                ->add('prixuni');

        
    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GincidentBundle\Entity\ticket'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'gincidentbundle_ticket';
    }

}
