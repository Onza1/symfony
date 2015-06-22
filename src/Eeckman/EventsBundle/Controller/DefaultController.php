<?php

namespace Eeckman\EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EeckmanEventsBundle:Frontend:index.html.twig');
    }
}
