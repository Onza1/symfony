<?php

namespace Eeckman\UserBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eeckman\UserBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $user = new Users();

        $form = $this->createFormBuilder($user)
            ->add('username', 'text')
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);


        if ($form->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();

            $em->persist($user);

            $em->flush();

            return $this->redirect($this->generateUrl('eeckman_events_homepage'));
        }

        return $this->render('EeckmanUserBundle:Admin:index.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}
