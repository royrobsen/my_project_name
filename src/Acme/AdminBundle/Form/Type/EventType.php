<?php

namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('title', 'text', array('attr' => array('class' => 'text-input', 'style' => 'width: 100%')))
                ->add('description', 'textarea', array('attr' => array('class' => 'text-input')))
                ->add('group', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\UserGroups',
                    'property' => 'groupName'))
                ->add('eventcategory', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\EventCategory',
                    'property' => 'title', ))
                ->add('createdDate', 'date')
                ->add('startdate')  
                ->add('enddate')    
                ->add('city', 'text')  
                ->add('address', 'text')
                ->add('zipcode', 'text')
                ->add('heim', 'text', array('label' => false,'required' => false))
                ->add('gast', 'text', array('label' => false,'required' => false))
                ->add('toreHeim', 'text', array('label' => false,'required' => false))
                ->add('toreGast', 'text', array('label' => false,'required' => false))
                ->add('logoHeim', 'text', array('label' => false,'required' => false))
                ->add('logoGast', 'text', array('label' => false,'required' => false))
                ->add('intervall', 'choice', array(
                'choices' => array('0' => 'Einmalig', '1' => 'Täglich', '7' => 'Wöchentlich', '14' => '14-tägig', '30' => 'Monatlich', '2' => 'jeder 2. Tag', '3' => 'jeder 3. Tag', '4' => 'jeder 4. Tag', '5' => 'jeder 5. Tag', '6' => 'jeder 6. Tag'))) 
                ->add('save', 'submit', array('label' => 'Speichern', 'attr' => array('class' => 'btn-primar')));
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BlogBundle\Entity\Events',
        ));
    }

    public function getName()
    {
        return 'events';
    }
}
