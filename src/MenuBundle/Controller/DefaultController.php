<?php

namespace MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$tabticket = array("ticket/create" => "Saisir un ticket", "ticket/edit" => "Modifier un ticket", "ticket/list" => "Tous les tickets" );
    	$tabmenu = array("" => "Accueil",
    					 "societe" => "Société",
    					 "legal" => "Mentions légales",
    					 "Ticket" => $tabticket);
        return $this->render('@Menu/Default/index.html.twig',array("listemenu" => $tabmenu));
    }
}
