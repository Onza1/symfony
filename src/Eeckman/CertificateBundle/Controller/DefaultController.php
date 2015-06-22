<?php

namespace Eeckman\CertificateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EeckmanCertificateBundle:Default:index.html.twig', array('name' => $name));
    }
}
