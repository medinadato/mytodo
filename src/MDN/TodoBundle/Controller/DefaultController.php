<?php

namespace MDN\TodoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MDN\TodoBundle\Entity\Task;
use MDN\TodoBundle\Form\TaskType;

/**
 * Default controller.
 */
class DefaultController extends Controller
{

    /**
     * HOme page.
     *
     * @Route("/", name="homepage")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {    
        return array();
    }
}