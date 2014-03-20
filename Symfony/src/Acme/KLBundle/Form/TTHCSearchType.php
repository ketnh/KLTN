<?php
namespace Acme\KLBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Acme\KLBundle\Form\CongDanType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TTHCSearchType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('idcongdan',new CongDanType(),array(
            'required'=>FALSE,
        ))
            ->add('Submit','submit');
    }
    public function getName()
    {
        return 'hosotthc';
    }    
}

