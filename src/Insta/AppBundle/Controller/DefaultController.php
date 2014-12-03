<?php

namespace Insta\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
    * @Route("/", name="home")
    * @Template("InstaAppBundle:Default:index.html.twig")
    */
    public function indexAction()
    {
        return array();
    }
    
    /**
    * @Route("/info", name="info")
    * @Template("InstaAppBundle:Default:info.html.twig")
    */
    public function infoAction(){
        return array();
    }
}