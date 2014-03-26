<?php

namespace Acme\PermissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\PermissionBundle\Entity\Quyenlinhvuc;
use Acme\PermissionBundle\Entity\Tthc;
use Acme\PermissionBundle\Entity\User;
use Acme\PermissionBundle\Entity\Linhvuc;
use Acme\PermissionBundle\Form\UserType;
use Acme\PermissionBundle\Form\LinhvucType;
use Acme\PermissionBundle\Form\QuyenlinhvucType;
use Acme\PermissionBundle\Form\AddQuyenlinhvucType;
use Acme\PermissionBundle\Form\TTHCType;
use Symfony\Component\HttpFoundation\Request;
class PermissionController extends Controller
{
    public function indexAction(){
        return $this->render('AcmePermissionBundle:Admin:baseAdmin.html.twig');
    }
    public function intinialDataAction(){
        return $this->render('AcmePermissionBundle:Admin:initialData.html.twig');
    }
    public function createUserAction(Request $request)
    {
//        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:User');
//        $quyenlinhvuc = $resposity->find(1);
        $user = new User();
        $form = $this->createForm(new UserType(),$user,array(
            'action'=>$this->generateUrl('createUser')
        ));
        $form->handleRequest($request);
        if ($form->isValid()){            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('initialData'));
        }
        return $this->render('AcmePermissionBundle:Admin:createUser.html.twig',array('form'=>$form->createView()));
    }
    public function createLinhvucAction(Request $request)
    {
        $linhvuc = new Linhvuc();
        $form = $this->createForm(new LinhvucType(),$linhvuc,array(
            'action'=>$this->generateUrl('createLinhvuc')
        ));
        $form->handleRequest($request);
        if ($form->isValid()){        
            $em = $this->getDoctrine()->getManager();
            $em->persist($linhvuc);
            $em->flush();
//            return $this->render('AcmePermissionBundle:Admin:initialData.html.twig');
            return $this->redirect($this->generateUrl('initialData'));
        }
        return $this->render('AcmePermissionBundle:Admin:createLinhvuc.html.twig',array('form'=>$form->createView()));
    }
    public function createTTHCAction(Request $request)
    {
        $tthc = new Tthc();
        $form = $this->createForm(new TTHCType(),$tthc,array(
            'action'=>  $this->generateUrl('createTTHC')
        ));
        $form->handleRequest($request);
        if ($form->isValid()){            
            $em = $this->getDoctrine()->getManager();
            $em->persist($tthc);
            $em->flush();
            return $this->redirect($this->generateUrl('initialData'));
        }
        return $this->render('AcmePermissionBundle:Admin:createTTHC.html.twig',array('form'=>$form->createView()));
    }
    public function permissionAction(Request $request)
    {
        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:Quyenlinhvuc');
        $quyenlinhvuc = $resposity->findAll();
        $form = $this->createFormBuilder()
                ->add('quyenlinhvuc','entity',array(
                    'class'=>'AcmePermissionBundle:Quyenlinhvuc',
                    'property'=>'id',
                    'multiple'=>TRUE,
                    'expanded'=>TRUE
                ))
                ->add('submit','submit')
                ->getForm();
        $form->handleRequest($request);        
        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $quyenlvs = $form->getData()['quyenlinhvuc'];
            foreach ($quyenlvs as $quyenlv){
                $em->remove($quyenlv);
            }
            $em->flush();
        }
        return $this->render('AcmePermissionBundle:Admin:permission.html.twig',array('quyenlinhvuc'=>$quyenlinhvuc,'form'=>$form->createView()));

    }
    public function editPermissionAction($id,Request $request){
        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:Quyenlinhvuc');
        $quyenlinhvuc = $resposity->findOneById($id);
        $form = $this->createForm(new QuyenlinhvucType(),$quyenlinhvuc);
        return $this->render('AcmePermissionBundle:Admin:editPermission.html.twig',array('form'=>$form->createView(),'quyenlinhvuc'=>$quyenlinhvuc));
    }
    public function addPermissionAction($id,Request $request){
        $resposity = $this->getDoctrine()->getRepository('AcmePermissionBundle:User');
        $user = $resposity->findOneById($id);
        $form = $this->createForm(new UserType(),$user);
        return $this->render('AcmePermissionBundle:Admin:addPermission.html.twig',array('form'=>$form->createView()));
    }
}
