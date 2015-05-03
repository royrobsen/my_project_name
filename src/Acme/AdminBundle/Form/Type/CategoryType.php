<?php

namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('catName', 'text', array('label' => 'Kategorienname', 'attr' => array('class' => 'text-input', 'style' => 'width: 100%')))
                ->add('description', 'textarea', array('label' => 'Beschreibung', 'attr' => array('class' => 'text-input')))
                ->add('group', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\UserGroups',
                    'property' => 'groupName', 'label' => 'Sichtbarkeit', 'attr' => array('class' => 'text-input')))
                ->add('save', 'submit', array('label' => 'Speichern', 'attr' => array('class' => 'btn-primar')));
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BlogBundle\Entity\Categories',
        ));
    }

    public function getName()
    {
        return 'categories';
    }
}
