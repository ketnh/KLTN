<?php
namespace Acme\StoreBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductDeleteType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){        
        $builder->add('user', 'entity', array(
            'class' => 'AcmeStoreBundle:Product',
            'query_builder'=>function(EntityRepository $er) use ($options){                
            return $er->createQueryBuilder('p')->where('p.user = ?1')
                        ->setParameter(1, $options['id']);
            },
            'property'=>'id',
            'expanded' => TRUE,
            'multiple' => TRUE,
            'label' => NULL,))
            ->add('delete','submit');
    }
    public function getName()
    {
        return 'product';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'id' => '',
       ));
     }
}

