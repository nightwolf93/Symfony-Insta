<?php

namespace Insta\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PlanningController extends Controller
{
    /**
    * @Route("/planning", name="planning")
    * @Template("InstaAppBundle:Default:planning.html.twig")
    */
    public function indexAction(){
       return array();
    }
    
}
