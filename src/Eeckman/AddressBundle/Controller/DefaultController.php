<?php

namespace Eeckman\AddressBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EeckmanAddressBundle:Default:index.html.twig', array('name' => $name));
    }
}
