<?php

namespace Eeckman\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EeckmanUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
