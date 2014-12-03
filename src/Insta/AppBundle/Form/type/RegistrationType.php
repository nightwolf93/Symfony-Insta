<?php
namespace Insta\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', new ConnectionType());
        $builder->add('password', new ConnectionType());
    }
    public function getName() {
        return 'connection';
    }
}

