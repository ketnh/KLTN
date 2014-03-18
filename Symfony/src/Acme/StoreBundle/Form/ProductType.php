<?php
namespace Acme\StoreBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class ProductType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('name', 'text')
        ->add('price', 'number')
        ->add('description','text')
        ->add('save','submit');
    }
    public function getName()
    {
        return 'product';
    }
}

