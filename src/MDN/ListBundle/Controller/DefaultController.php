<?php

namespace MDN\ListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * 
     * @Route("/", name="mdn_list_homepage")
     * @Template("MDNListBundle:Default:index.html.twig")
     * @return array
     */
    public function indexAction()
    {
        $items = $this->getDoctrine()
            ->getRepository('MDNListBundle:Item')
            ->findAll();
        
        return array('items' => $items);
    }
}
