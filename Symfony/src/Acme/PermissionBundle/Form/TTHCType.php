<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TTHCType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('name','text',array(
            'label'=>'Tên TTHC'
        ))
        ->add('noidungthuchien','textarea',array(
            'label' =>'Mô tả'
        ))
        ->add('thogiangiaiquyet','text',array(
            'label'=>'Thời gian giải quyết'))
        ->add('linhvuc','entity',array(
            'class'=>'AcmePermissionBundle:Linhvuc',
            'property'=>'name',
            'label'=>'Lĩnh vực'
        ))
        ->add('submit','submit')
            ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'Acme\PermissionBundle\Entity\Tthc'
        ));
    }
    public function getName()
    {
        return 'tthc';
    }    
}

