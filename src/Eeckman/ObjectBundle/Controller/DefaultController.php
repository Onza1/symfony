<?php

namespace Eeckman\ObjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Eeckman\ObjectBundle\Entity\Artists;
use Eeckman\ObjectBundle\Entity\LengthUnit;
use Eeckman\ObjectBundle\Entity\Materials;
use Eeckman\ObjectBundle\Entity\Object_Types;
use Eeckman\ObjectBundle\Entity\Objects;
use Eeckman\ObjectBundle\Entity\Periods;
use Eeckman\ObjectBundle\Entity\Pictures;
use Eeckman\ObjectBundle\Entity\PicturesObjects;
use Eeckman\ObjectBundle\Entity\Technics;
use Eeckman\ObjectBundle\Entity\WeightUnit;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EeckmanObjectBundle:Default:index.html.twig', array('name' => $name));
    }

    public function newArtistAction(Request $request)
    {
        $artist = new Artists();

        $formArtist = $this->createFormBuilder($artist)
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('birthDate', 'date', array('widget'=> 'single_text'))
            ->add('deathDate', 'date', array('widget'=> 'single_text'))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formArtist->handleRequest($request);;

        if ($formArtist->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($artist);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formArtist->createView(),
        ));
    }

    public function newPeriodAction(Request $request)
    {
        $period = new Periods();

        $formPeriod = $this->createFormBuilder($period)
            ->add('shortName', 'text')
            ->add('description', 'textarea')
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formPeriod->handleRequest($request);;

        if ($formPeriod->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($period);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formPeriod->createView(),
        ));
    }

    public function newTechnicAction(Request $request)
    {
        $technic = new Technics();

        $formTechnic = $this->createFormBuilder($technic)
            ->add('shortName', 'text')
            ->add('description', 'textarea')
            ->add('fragile', 'checkbox', array('required' => false))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formTechnic->handleRequest($request);;

        if ($formTechnic->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($technic);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formTechnic->createView(),
        ));
    }
}
