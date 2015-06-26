<?php
/**
 * Created by PhpStorm.
 * User: Olivier
 * Date: 26/06/2015
 * Time: 14:34
 */

namespace Eeckman\ObjectBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ObjectController extends Controller
{
    public function indexAction($idObject)
    {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Oeuvre", $this->get('router')->generate('eeckman_events_homepage'));

        // Récupérer l'oeuvre
        $om = $this->getDoctrine()->getManager()->getRepository('EeckmanObjectBundle:Objects');

        $object = $om->find($idObject);

        // Récupérer les photos de l'oeuvre
        $pm = $this->getDoctrine()->getManager()->getRepository('EeckmanObjectBundle:PicturesObjects');
        $pictures = $pm->findBy(array('iDObject' => $object));

        return $this->render('EeckmanObjectBundle:Frontend:index.html.twig', array('object' => $object, 'pictures' => $pictures));
    }
}