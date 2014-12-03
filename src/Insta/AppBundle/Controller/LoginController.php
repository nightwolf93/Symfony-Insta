<?php

namespace Insta\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Insta\AppBundle\Form\Type\RegistrationType;
use Insta\AppBundle\Form\data\ConnectionData;
use Insta\AppBundle\Entity\Account;

class LoginController extends Controller
{
    /**
    * @Route("/login", name="login")
    * @Template("InstaAppBundle:Default:login.html.twig")
    */
    public function indexAction(){
        $form = $this->createForm(new RegistrationType(), new ConnectionData());
        return $this->render(array('form' => $form->createView()));
    }
    
}


