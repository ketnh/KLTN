<?php
namespace Acme\PermissionBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class QuyenlinhvucType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
        $quyenlinhvuc = $event->getData();
        $form = $event->getForm();
//        $form->add('id','text')
        if ($quyenlinhvuc != NULL){
            $form->add('quyenhan','entity',array(
                'class'=>'AcmePermissionBundle:Quyenhan',
                'preferred_choices'=>array($quyenlinhvuc->getQuyenhan()),
                'property'=>'ten',
                'label'=>'Quyền hạn',
            ))
            ->add('linhvuc','entity',array(
                'class'=>'AcmePermissionBundle:Linhvuc',
                'property'=>'name',
                'preferred_choices'=>array($quyenlinhvuc->getLinhvuc()),
                'label'=>'Lĩnh vực',
            ))   
            ->add('submit','submit');        
            }
        });
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {        
        $resolver->setDefaults(array(
            'data_class' => 'Acme\PermissionBundle\Entity\Quyenlinhvuc',
            'preferred_quyenhan'=>new \Acme\PermissionBundle\Entity\Quyenhan(),
            'preferred_linhvuc'=>new \Acme\PermissionBundle\Entity\Linhvuc()
        ));
    }
    public function getName()
    {
        return 'quyenlinhvuc';
    }    
}

