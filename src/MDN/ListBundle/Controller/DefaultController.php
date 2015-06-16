<?php

namespace MDN\ListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class DefaultController extends Controller
{
    /**
     * 
     * @return array
     * @Template("MDNListBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        $items = $this->getDoctrine()
            ->getRepository('MDNListBundle:Item')
            ->findAll();
        
        return array('items' => $items);
    }
}
