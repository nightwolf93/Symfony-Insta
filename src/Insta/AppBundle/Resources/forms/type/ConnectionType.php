<?php
namespace Insta\AppBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConnectionType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array('requierd' => true));
        $builder->add('plainPassword', 'repeated', array(
           'type' => 'password', 'requierd' => true
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Insta\AppBundle\Entity\Account'
        ));
    }

    public function getName()
    {
        return 'connection';
    }
}