<?php

namespace WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use WebsiteBundle\Entity\tickets;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use WebsiteBundle\WebsiteBundle;


class TicketController extends Controller
{
    /**
     * @Route("/ticket/display/{id}",name="display_ticket")
     */
    public function displayAction($id){
        $tik = $this->getDoctrine()->getEntityManager();
        $ticket = $tik->getRepository('WebsiteBundle:tickets')->find($id);
        return $this->render('@Website/Ticket/display.html.twig', array('ticket'=>$ticket,));
    }


    /**
     * @Route("/ticket/create", name="create_ticket")
     */
    public function createAction(Request $request)
    {
        $tik = new tickets();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $tik);
        $formBuilder->add('titre', TextType::class)

                    ->add('message', TextareaType::class)
                    ->add('save', SubmitType::class);
        $form=$formBuilder->getForm();
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($tik);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Ticket soumis');
                return $this->redirectToRoute('display_ticket', array('id'=>$tik->getId()));
            }
        }
        return $this->render('@Website/Ticket/create.html.twig', array('form'=>$form->createView(),));
    }

    /**
     * @Route("/ticket/list", name="list_ticket")
     */
    public function listAction()
    {
        return $this->render('@Website/Ticket/list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ticket/edit/{id}", name="edit_ticket")
     */
    public function editAction()
    {
        return $this->render('@Website/Ticket/edit.html.twig', array(
            // ...
        ));
    }

}
