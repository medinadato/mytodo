<?php

namespace MDN\TodoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * 
 */
class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Homepage', array('route' => 'homepage'));
        $menu->addChild('Tasks', array('route' => 'task'));
        $menu->addChild('User', array('route' => 'user'));

        // access services from the container!
//        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
//        $task = $em->getRepository('MDNTodoBundle:Task')->find(1);

//        $menu->addChild('Latest Blog Post', array(
//            'route' => 'task_show',
//            'routeParameters' => array('id' => $task->getId())
//        ));

        // create another menu item
//        $menu->addChild('About Me', array('route' => 'about'));
        // you can also add sub level's to your menu's as follows
//        $menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }
}