<?php

namespace Insta\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Insta\AppBundle\Form\Type\RegistrationType;
use Insta\AppBundle\Form\Data\ConnectionData;
use Insta\AppBundle\Entity\Account;

class LoginController extends Controller
{
    /**
    * @Route("/login", name="login")
    * @Template("InstaAppBundle:Default:login.html.twig")
    */
    public function indexAction(){
        $request = $this->getRequest();
        
        $account = new Account();
        $formBuilder = $this->createFormBuilder($account);
        
        $formBuilder
                ->add('email', 'text')
                ->add('password', 'text')
                ->add('Login', 'submit');
        
        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            return $this->redirect($this->generateUrl('home'));
        }
        
        return array('form' => $form->createView());
    }
    
}


