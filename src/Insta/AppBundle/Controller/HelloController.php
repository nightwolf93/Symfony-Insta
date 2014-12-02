<?php

namespace Insta\AppBundle\Controller;

class HelloController
{
    public function indexAction($name)
    {
        return $this->render('InstaAppBundle:Hello:index.html.twig', array('name' => $name));
    }
}