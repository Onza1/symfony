<?php

namespace Eeckman\EventsBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eeckman\EventsBundle\Entity\Events;

/**
 * Class EventsController
 * @package Eeckman\EventsBundle\Controller\Frontend
 *
 *
 * Events Controller for Registered Users
 */
class EventsController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();

        $em =$this->getDoctrine()->getManager()
            ->getRepository('EeckmanEventsBundle:Events');

        $entities = $em->findByPolicyHolder($user->getIDEvent()); // TO DO : Changer le parametre pour avoir l'id de l'utilisateur.



        return $this->render('EeckmanEventsBundle:Frontend:index.html.twig', array('entities' => $entities));
    }

    public function detailsEventAction($idEvent)
    {

        return $this->render('EeckmanEventsBundle:Frontend:detailsEvent.html.twig', array('event'=> $idEvent));
    }
}
