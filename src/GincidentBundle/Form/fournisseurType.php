<?php

namespace GincidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class fournisseurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('reference')->add('codetva')->add('dircom_adr1')
		->add('dircom_adr2')->add('dircom_telfixe')->add('dircom_telmobile')->add('dircom_nomrue')->add('dircom_numrue')
		->add('dirzone_adr1')
		->add('dirzone_adr2')->add('dirzone_telfixe')->add('dirzone_telmobile')->add('dirzone_nomrue')->add('dirzone_numrue')
		->add('agentcom1_adr1')
		->add('agentcom1_adr2')->add('agentcom1_telfixe')->add('agentcom1_telmobile')->add('agentcom1_nomrue')->add('agentcom1_numrue')
->add('agentcom2_adr1')
		->add('agentcom2_adr2')->add('agentcom2_telfixe')->add('agentcom2_telmobile')->add('agentcom2_nomrue')->add('agentcom2_numrue')		
->add('agentcom3_adr1')
		->add('agentcom3_adr2')->add('agentcom3_telfixe')->add('agentcom3_telmobile')->add('agentcom3_nomrue')->add('agentcom3_numrue')		
		;
		
		
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GincidentBundle\Entity\fournisseur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gincidentbundle_fournisseur';
    }


}
