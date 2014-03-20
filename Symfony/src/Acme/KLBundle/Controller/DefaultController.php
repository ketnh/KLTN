<?php

namespace Acme\KLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\KLBundle\Form\TTHCActionType;
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $resposity = $this->getDoctrine()->getRepository('AcmeKLBundle:Hosotthc');
        $hstthc = $resposity->findAll();
        $form = $this->createForm(new TTHCActionType(),NULL);
        $form->handleRequest($request);
        if ($form->isValid()){           
        }
        return $this->render('AcmeKLBundle:Template:home.html.twig', array('hstthc' => $hstthc,
            'form'=>$form->createView(),));   
    }
}
