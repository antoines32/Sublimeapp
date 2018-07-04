<?php

namespace SocieteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/societe")
     */
    public function indexAction()
    {
        return $this->render('@Societe/Default/index.html.twig');
    }
}
