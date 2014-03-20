<?php
namespace Acme\KLBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TTHCActionType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('hstthc', 'entity', array(
            'class' => 'AcmeKLBundle:Hosotthc',            
            'property'=>'idhosotthc',
            'expanded' => TRUE,
            'multiple' => TRUE,
            'label' => NULL,))
            ->add('tttl', 'entity', array(
            'class' => 'AcmeKLBundle:Tinhtrangthuly',            
            'property'=>'tinhtrangthuly',
            'expanded' => FALSE,
            'multiple' => FALSE,
            'label' => 'Action',))
            ->add('Submit','submit');
    }
    public function getName()
    {
        return 'hosotthc';
    }    
}

