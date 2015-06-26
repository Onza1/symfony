<?php
/**
 * Created by PhpStorm.
 * User: Olivier
 * Date: 25/06/2015
 * Time: 16:52
 */
// src/AppBundle/Menu/Builder.php
namespace Eeckman\EventsBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'list-unstyled');

        $menu->addChild('Mes événements', array('route' => 'eeckman_events_homepage'))
            ->setAttribute('icon', 'fa fa-calendar');


        // Récupérer le user en cours
        $user = $this->container->get('security.context')->getToken()->getUser();

        // Récuper le PolicyHolder correspondant
        $pm = $this->container->get('doctrine')->getManager()->getRepository('EeckmanPolicyBundle:PolicyHolders');
        $policyHolder = $pm->findByContactID($user->getIDContact());

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager()->getRepository('EeckmanEventsBundle:Events');
        // findMostRecent and Blog are just imaginary examples
        $events = $em->findByPolicyHolder($policyHolder);

        $menu['Mes événements']->setChildrenAttribute('class','list-unstyled');
        foreach($events as $item)
        {
            $menu['Mes événements']->addChild($item->getShortName(), array('route' => 'eeckman_events_details', 'routeParameters' => array('idEvent' => $item->getId())));
            //$menu['Mes événements']->addChild('toto', array('route' => 'eeckman_events_homepage'));
        }

        //$menu->addChild('Latest Blog Post', array(
        //    'route' => 'blog_show',
        //    'routeParameters' => array('id' => $blog->getId())
        //));

        // create another menu item
        $menu->addChild('About Me', array('route' => 'eeckman_events_homepage'));
        // you can also add sub level's to your menu's as follows
        $menu['About Me']->addChild('Edit profile', array('route' => 'eeckman_events_homepage'));

        // ... add more children

        return $menu;
    }
}