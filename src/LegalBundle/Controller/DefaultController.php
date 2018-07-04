<?php

namespace LegalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/legal")
     */
    public function indexAction()
    {
        return $this->render('@Legal/Default/index.html.twig');
    }
}
