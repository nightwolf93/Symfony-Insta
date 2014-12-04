<?php

namespace Insta\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class PlanningController extends Controller
{
    /**
    * @Route("/planning", name="planning")
    * @Security("is_granted('ROLE_ADMIN')")
    * @Template("InstaAppBundle:Default:planning.html.twig")
    */
    public function indexAction(){
       $user = $this->getUser();
       return array();
    }
    
}
