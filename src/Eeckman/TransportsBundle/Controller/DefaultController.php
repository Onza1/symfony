<?php

namespace Eeckman\TransportsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EeckmanTransportsBundle:Default:index.html.twig', array('name' => $name));
    }
}
