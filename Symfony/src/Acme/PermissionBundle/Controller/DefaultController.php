<?php

namespace Acme\PermissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function menuCreateAction()
    {

        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $functions = $em->createQuery('SELECT f from AcmePermissionBundle:Functions f '
                . 'JOIN f.groupfunction g '
                . 'JOIN g.role r '
                . 'WHERE r.id = :id')->setParameter('id',$usr->getRole()[0]->getId())->getResult();
        return $this->render('AcmePermissionBundle:Default:menu.html.twig',array('functions' => $functions));
    }
}
