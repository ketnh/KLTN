<?php

namespace Acme\KLBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\KLBundle\Form\TTHCActionType;
use Acme\KLBundle\Form\TTHCSearchType;
use Acme\KLBundle\Entity\Hosotthc;
class StaffController extends Controller
{
    
    public function showProfileAction(Request $request)
    {
        $resposity = $this->getDoctrine()->getRepository('AcmeKLBundle:Hosotthc');
        $hstthc = $resposity->findAll();
        $form = $this->createForm(new TTHCActionType(),NULL);
        $hosotthc = new Hosotthc();
        $formSearch = $this->createForm(new TTHCSearchType(),$hosotthc);
        $form->handleRequest($request);
        if ($form->isValid()){           
        }
        $formSearch->handleRequest($request);
        if ($formSearch->isValid()){
            echo $hosotthc->getIdcongdan()->getName();
        }
        return $this->render('AcmeKLBundle:Template:home.html.twig', array('hstthc' => $hstthc,
            'form'=>$form->createView(),'formSearch'=>$formSearch->createView()));   
    }
}
