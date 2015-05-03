<?php

namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AufstellungType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tw', 'text', array('label' => false,'required' => false))
                ->add('lav', 'text', array('label' => false,'required' => false))
                ->add('liv', 'text', array('label' => false,'required' => false))
                ->add('iv', 'text', array('label' => false,'required' => false))
                ->add('riv', 'text', array('label' => false,'required' => false))
                ->add('rav', 'text', array('label' => false,'required' => false))
                ->add('lm', 'text', array('label' => false,'required' => false))
                ->add('zlm', 'text', array('label' => false,'required' => false))
                ->add('zrm', 'text', array('label' => false,'required' => false))
                ->add('zdm', 'text', array('label' => false,'required' => false))
                ->add('zom', 'text', array('label' => false,'required' => false))
                ->add('rm', 'text', array('label' => false,'required' => false))
                ->add('ls', 'text', array('label' => false,'required' => false))
                ->add('ms', 'text', array('label' => false,'required' => false))
                ->add('rs', 'text', array('label' => false,'required' => false))
                ->add('sub1', 'text', array('label' => false,'required' => false))
                ->add('sub1', 'text', array('label' => false,'required' => false))
                ->add('sub2', 'text', array('label' => false,'required' => false))
                ->add('sub3', 'text', array('label' => false,'required' => false))
                ->add('sub4', 'text', array('label' => false,'required' => false))
                ->add('sub5', 'text', array('label' => false,'required' => false))
                ->add('sub6', 'text', array('label' => false,'required' => false))
                ->add('sub7', 'text', array('label' => false,'required' => false))
                ->add('ch1', 'text', array('label' => false,'required' => false))
                ->add('ch2', 'text', array('label' => false,'required' => false))
                ->add('ch3', 'text', array('label' => false,'required' => false))
                ->add('ch4', 'text', array('label' => false,'required' => false))
                ->add('ch5', 'text', array('label' => false,'required' => false))
                ->add('ch6', 'text', array('label' => false,'required' => false))
                ->add('coach', 'text', array('label' => false,'required' => false))
                
                ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BlogBundle\Entity\Aufstellung',
        ));
    }

    public function getName()
    {
        return 'kader';
    }
}