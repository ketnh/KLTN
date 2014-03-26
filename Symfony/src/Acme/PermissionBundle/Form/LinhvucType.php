<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LinhvucType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('name','text',array(
            'label'=>'Lĩnh vực:'
        ))
        ->add('description','textarea',array(
            'label' =>'Mô tả'
        ))
        ->add('submit','submit')
            ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
        'data_class' => 'Acme\PermissionBundle\Entity\Linhvuc'
        ));
    }
    public function getName()
    {
        return 'linhvuc';
    }    
}

