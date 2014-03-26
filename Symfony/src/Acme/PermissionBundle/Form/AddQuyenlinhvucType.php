<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddQuyenlinhvucType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('quyenlinhvuc',new QuyenlinhvucType());
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {        
        $resolver->setDefaults(array(
            'data_class' => 'Acme\PermissionBundle\Entity\User',
        ));
    }
    public function getName()
    {
        return 'user';
    }    
}

