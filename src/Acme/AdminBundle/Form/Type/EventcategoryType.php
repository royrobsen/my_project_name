<?php

namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventcategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('title', 'text', array('label' => 'Kategorienname', 'attr' => array('class' => 'text-input', 'style' => 'width: 100%')))
                ->add('state', 'choice', array('label' => 'Status', 'choices' => array('0' => 'Inaktiv', '1' => 'Aktiv' )))
                ->add('save', 'submit', array('label' => 'Speichern', 'attr' => array('class' => 'btn-primar')));
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BlogBundle\Entity\Eventcategory',
        ));
    }

    public function getName()
    {
        return 'category';
    }
}
