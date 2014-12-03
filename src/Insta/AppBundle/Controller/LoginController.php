<?php

namespace Insta\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
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
                ->add('password', 'password')
                ->add('Login', 'submit');
        
        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $input = $this->getDoctrine()->getManager()->getRepository('InstaAppBundle:Account')
                    ->findOneByEmail($form['email']->getData());
            if($input === null){
                return array('form' => $form->createView(), 'error' => 'Aucune compte trouver : ' . $form['email']->getData());
            }
            if($input->getPassword() !== $form['password']->getData()){
                return array('form' => $form->createView(), 'error' => 'Mot de passe incorrect');
            }
            else {
                return $this->redirect($this->generateUrl('home'));
            }
        }
        
        return array('form' => $form->createView(), 'error' => false);
    }
    
}


