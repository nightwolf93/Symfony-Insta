<?php

namespace Insta\AppBundle\Controller;

class DefaultController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    public function indexAction()
    {
        return $this->render('InstaAppBundle:Default:index.html.twig');
    }
    public function connectionAction(){
        return $this->render('InstaAppBundle:Default:connection.html.twig');
    }
}