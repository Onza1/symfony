<?php

namespace Eeckman\ObjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EeckmanObjectBundle:Default:index.html.twig', array('name' => $name));
    }
}
