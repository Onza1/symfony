<?php

namespace Eeckman\EventsBundle\Controller\Frontend;

use Eeckman\EventsBundle\Entity\EventExtensions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eeckman\EventsBundle\Entity\Events;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class EventsController
 * @package Eeckman\EventsBundle\Controller\Frontend
 *
 *
 * Events Controller for Registered Users
 */
class EventsController extends Controller
{
    /**
     * Affiche la liste des événements d'un preneur d'assurance.
     * Affiche directement les détails d'un événement s'il n'en a qu'un.
     */
    public function indexAction(Request $request)
    {
        // BreadCrumb
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Événements", $this->get('router')->generate('eeckman_events_homepage'));

        // Récupérer le user en cours
        $user = $this->getUser();


        // Récuper le PolicyHolder correspondant
        $pm = $this->getDoctrine()->getManager()->getRepository('EeckmanPolicyBundle:PolicyHolders');
        $policyHolder = $pm->findByContactID($user->getIDContact());


        // Récupérer l'entity manager des events
        $em =$this->getDoctrine()->getManager()
            ->getRepository('EeckmanEventsBundle:Events');
        // Rechercher les events sur base du ID_PolicyHolder
        $entities = $em->findByPolicyHolder($policyHolder);

        // Rechercher les extensions liées à ses événements
        $evextm = $this->getDoctrine()->getManager()->getRepository('EeckmanEventsBundle:EventExtensions');
        $extensions = array();
        foreach($entities as $event){
            $extensions += $evextm->findByEventID($event->getID());
        }
        if(sizeof($entities) == 1){
            return $this->detailsEventAction($entities[0]->getID(), $request);
        }
        return $this->render('EeckmanEventsBundle:Frontend:index.html.twig', array('entities' => $entities, 'eventExt' => $extensions));
    }

    public function detailsEventAction($idEvent, Request $request)
    {


        // Récupérer infos concernant l'event
        $em = $this->getDoctrine()->getManager()->getRepository('EeckmanEventsBundle:Events');
        $event = $em->find($idEvent);


        // Récupérer les extensions qui le concerne
        $extm = $this->getDoctrine()->getManager()->getRepository('EeckmanEventsBundle:EventExtensions');
        $extensions = $extm->findByEventID($event->getID());

        $event->start = $extensions[0]->getStartDate();
        $event->end = $extensions[0]->getEndDate();
        foreach($extensions as $ext){
            if($ext->getStartDate() < $event->start) { $event->start = $ext->getStartDate(); }
            if($ext->getEndDate() > $event->end) { $event->end = $ext->getEndDate(); }
        }
        $user = $this->getUser();


        // Récuperer les oeuvres concernées
        $covm = $this->getDoctrine()->getManager()->getRepository('EeckmanCoverageBundle:Coverages');
        $coverages = $covm->findBy(array('iDEvent'=> $event->getID()));
        // BreadCrumb
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem($event->getShortName(), $this);

        // Formulaire demande extension
        $newExtensions = new EventExtensions();

        $formExt = $this->createFormBuilder($newExtensions)
            ->add('endDate', 'date', array('widget'=> 'single_text'))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formExt->handleRequest($request);

        if ($formExt->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();
            $newExtensions->setStartDate($event->start);
            $newExtensions->setIDEvent($event);
            $newExtensions->setUserRequest(true);
            $newExtensions->setValidation(false);
            $em->persist($newExtensions);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanEventsBundle:Frontend:detailsEvent.html.twig', array('event'=> $event, 'extensions' => $extensions, 'coverages' => $coverages, 'extForm' => $formExt->createView(), 'user' => $user));
    }
}
