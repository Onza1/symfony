<?php

namespace Eeckman\ObjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Eeckman\ObjectBundle\Entity\Artists;
use Eeckman\ObjectBundle\Entity\LengthUnit;
use Eeckman\ObjectBundle\Entity\Materials;
use Eeckman\ObjectBundle\Entity\ObjectTypes;
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
            ->add('deathDate', 'date', array('widget'=> 'single_text', 'required' => false))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formArtist->handleRequest($request);

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

    public function newMaterialAction(Request $request)
    {
        $material = new Materials();

        $formMaterial = $this->createFormBuilder($material)
            ->add('shortName', 'text')
            ->add('description', 'textarea')
            ->add('fragile', 'checkbox', array('required' => false))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formMaterial->handleRequest($request);;

        if ($formMaterial->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($material);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formMaterial->createView(),
        ));
    }

    public function newObjectTypeAction(Request $request)
    {
        $obj_type = new ObjectTypes();

        $formObj_type = $this->createFormBuilder($obj_type)
            ->add('shortName', 'text')
            ->add('description', 'textarea')
            ->add('fragile', 'checkbox', array('required' => false))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formObj_type->handleRequest($request);;

        if ($formObj_type->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($obj_type);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formObj_type->createView(),
        ));
    }

    public function newWeightUnitAction(Request $request)
    {
        $w_unit = new WeightUnit();

        $formW_unit = $this->createFormBuilder($w_unit)
            ->add('value', 'text')
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formW_unit->handleRequest($request);;

        if ($formW_unit->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($w_unit);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formW_unit->createView(),
        ));
    }

    public function newLengthUnitAction(Request $request)
    {
        $l_unit = new LengthUnit();

        $formL_unit = $this->createFormBuilder($l_unit)
            ->add('value', 'text')
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formL_unit->handleRequest($request);;

        if ($formL_unit->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($l_unit);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formL_unit->createView(),
        ));
    }

    public function newPictureAction(Request $request)
    {
        $picture = new Pictures();

        $formPicture = $this->createFormBuilder($picture)
            ->add('file','file')
            ->add('description', 'text')
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formPicture->handleRequest($request);;

        if ($formPicture->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $picture->upload();
            $em->persist($picture);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:formfile.html.twig', array(
            'form' => $formPicture->createView(),
        ));
    }

    public function showImageAction($id)
    {
        $em = $this->getDoctrine()->getManager()->getRepository('EeckmanObjectBundle:Pictures');

        $picture = $em->find($id);

        return $this->render('EeckmanObjectBundle:Default:show.html.twig', array('picture'=> $picture));
    }

    public function newObjPicAction(Request $request)
    {
        $link = new PicturesObjects();

        $formLink = $this->createFormBuilder($link)
            ->add('iDPicture', 'entity', array(
                'class' => 'EeckmanObjectBundle:Pictures',
                'property' => 'linkToPicture',
                'label' => 'Image'
            ))
            ->add('iDObject', 'entity', array(
                'class' => 'EeckmanObjectBundle:Objects',
                'property' => 'title',
                'label' => 'Objet'
            ))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();

        $formLink->handleRequest($request);;

        if ($formLink->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();


            $em->persist($link);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formLink->createView(),
        ));
    }









    /////////////// CREATE OBJECT ///////////////////

    public function newObjectAction(Request $request)
    {
        $object = new Objects();

        $formObject = $this->createFormBuilder($object)
            ->add('iDArtist', 'entity', array(
                'class' => 'EeckmanObjectBundle:Artists',
                'label' => 'Artiste'
            ))
            ->add('title','text')
            ->add('clientRef', 'text')
            ->add('iDObjectType', 'entity', array(
                'class' => 'EeckmanObjectBundle:ObjectTypes',
                'property' => 'shortName',
                'label' => 'Object Type'
            ))
            ->add('iDPeriod', 'entity', array(
                'class' => 'EeckmanObjectBundle:Periods',
                'property' => 'shortName',
                'label' => 'Period'
            ))
            ->add('iDTechnic', 'entity', array(
                'class' => 'EeckmanObjectBundle:Technics',
                'property' => 'shortName',
                'label' => 'Technic'
            ))
            ->add('iDMaterial', 'entity', array(
                'class' => 'EeckmanObjectBundle:Materials',
                'property' => 'shortName',
                'label' => 'Material'
            ))
            ->add('inscriptionsAndMarkings','textarea')
            ->add('distinguishingFeatures', 'textarea')
            ->add('subject', 'textarea')
            ->add('year', 'text')
            ->add('description', 'textarea')
            ->add('fragile', 'checkbox', array('required' => false))
            ->add('selected', 'checkbox', array('required' => false))
            ->add('received', 'checkbox', array('required' => false))
            ->add('conditionalReportIn', 'checkbox', array('required' => false))
            ->add('conditionalReportOut', 'checkbox', array('required' => false))
            ->add('hung', 'checkbox', array('required' => false))
            ->add('sent', 'checkbox', array('required' => false))
            ->add('Receipted', 'checkbox', array('required' => false))
            ->add('receptionNote', 'checkbox', array('required' => false))
            ->add('length', 'text')
            ->add('width', 'text')
            ->add('depth', 'text')
            ->add('iDLengthUnit', 'entity', array(
                'class' => 'EeckmanObjectBundle:LengthUnit',
                'property' => 'value',
                'label' => 'Length unit'
            ))
            ->add('weight', 'text')
            ->add('iDWeightUnit', 'entity', array(
                'class' => 'EeckmanObjectBundle:WeightUnit',
                'property' => 'value',
                'label' => 'Weight unit'
            ))
            ->add('save', 'submit', array('label' => 'Save Artist'))
            ->getForm();



        $formObject->handleRequest($request);;

        if ($formObject->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($object);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanObjectBundle:Default:forms.html.twig', array(
            'form' => $formObject->createView(),
        ));
    }


}
