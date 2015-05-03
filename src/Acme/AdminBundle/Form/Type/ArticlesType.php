<?php

namespace Acme\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('headline', 'text', 
                    array('label' => false))
                ->add('articleContent', 'textarea')
                ->add('state', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\Status',
                    'property' => 'status',
                    'label' => false))
                ->add('category', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\Categories',
                    'property' => 'cat_name',
                    'label' => false))
                ->add('group', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\UserGroups',
                    'property' => 'group_name',
                    'label' => false))
                ->add('createdDate', 'date')
                ->add('author', 'entity', 
                  array('class' => 'Acme\BlogBundle\Entity\Users',
                    'property' => 'name',
                    'label' => false))
                ->add('save', 'submit', array('label' => 'Speichern'))
                ->add('aufgestellt', new AufstellungType());
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BlogBundle\Entity\Articles',
        ));
    }

    public function getName()
    {
        return 'articles';
    }
}
