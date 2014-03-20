<?php
namespace Acme\KLBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CongDanType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('name','text',array(
            'label'=>'Tên công dân:',
            'required'=>FALSE
        ))
            ;
    }
    public function getName()
    {
        return 'congdan';
    }    
}

