<?php

namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         
        if($options['data']->getActive() === 1) {
            $options['data']->setActive(false);
        }
        
        $builder->add('username', 'text', array('label' => 'Username', 'required' => true))
                ->add('name', 'text', array('label' => 'Nachname', 'required' => true))
                ->add('group', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\UserGroups',
                    'property' => 'groupName', 'label' => 'Gruppe'))
                ->add('firstName', 'text', array('label' => 'Vorname', 'required' => true))
                ->add('attachment', 'file', array('label' => false, 'required' => false))
                ->add('email', 'text', array('label' => 'E-Mailadresse','required' => false))
                ->add('active', 'checkbox', array('label' => 'Aktiv', 'required' => false))
                ->add('blocked', 'checkbox', array('label' => 'Blockiert', 'required' => false))
                ->add('position', 'choice', array(
                    'choices' => array('Torwart' => 'Torwart', 'Abwehr' => 'Abwehr', 'Mittelfeld' => 'Mittelfeld', 'Sturm' => 'Sturm', 'Trainer' => 'Trainer')))
                ->add('save', 'submit', array('label' => 'Speichern', 'attr' => array('class' => 'btn-primar')));
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BlogBundle\Entity\Users',
        ));
    }

    public function getName()
    {
        return 'users';
    }
}
