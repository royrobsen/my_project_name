<?php

namespace Acme\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
               
        $builder->add('name', 'text', array('label' => 'Name'))
            ->add('mail', 'email', array('label' => 'E-Mail'))
            ->add('subject', 'text', array('label' => 'Betreff'))
            ->add('message', 'textarea', array('label' => 'Nachricht'))
            ->add('security', 'text', array('label' => 'Sicherheitsfrage'))
            ->add('send', 'submit', array('label' => 'Senden'));
    }

    public function getName()
    {
        return 'contact';
    }
}
