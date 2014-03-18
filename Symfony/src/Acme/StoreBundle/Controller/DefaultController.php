<?php

namespace Acme\StoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Entity\Document;
use Acme\StoreBundle\Entity\User;
use Acme\StoreBundle\Form\ProductType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\StoreBundle\Form\ProductDeleteType;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
    public function createProductAction()
    {
        
        $product = new Product();
        $product->setName("kate teddy");
        $product->setPrice(100000);
        $product->setDescription("Oh no");
        $user = new User();
        $user->setUsername('admin');
        $user->setPassword('abc123');
        $user->setEmail('abc@xyz.com');
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->persist($user);
        $em->flush();
        return new Response('Created product id '.$product->getId());
    }
    public function showDBAction(Request $request)
    {       
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();  
        $resposity = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product');
        $products = $resposity->findBy(array('user'=>$usr->getId()));
        $form = $this->createForm(new ProductDeleteType(),null,array('id' => $usr->getId()));
        $form->handleRequest($request);
        if ($form->isValid()){
            $productss = $form->getData()['user'];
            foreach ($productss as $product) {
                $em->remove($product);
            }
            $em->flush();
            return $this->redirect($this->generateUrl('acme_show_db'));
        }
        return $this->render('AcmeStoreBundle:Default:db.html.twig', array('products' => $products,'form'=>$form->createView()));
    }
    public function newAction(Request $request)
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        $product = new Product();
        $form = $this->createForm(new ProductType(),$product);
        $form->handleRequest($request);
        if ($form->isValid()){   
            $em = $this->getDoctrine()->getManager();
            $product->setUser($usr);
            $em->persist($product);
            $em->flush();
            return $this->redirect($this->generateUrl('acme_show_db'));
        }
        return $this->render('AcmeStoreBundle:Default:new.html.twig',array('form'=>$form->createView()));
    }
    public function editAction(Request $request,$id)
    {
        $resposity = $this->getDoctrine()->getRepository('AcmeStoreBundle:Product');
        $product = $resposity->find($id);
        $form = $this->createForm(new ProductType(),$product);
        $form->handleRequest($request);
        if ($form->isValid()){   
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('acme_show_db'));
        }
        return $this->render('AcmeStoreBundle:Default:new.html.twig',array('form'=>$form->createView()));
    }
    public function uploadAction(Request $request)
    {
        $document = new Document();
        $form = $this->createFormBuilder($document)
        ->add('name')
        ->add('file')
        ->add('submit','submit')
        ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $document->upload();
            $em->persist($document);
            $em->flush();
            return $this->redirect($this->generateUrl('acme_show_db'));
        }
         return $this->render('AcmeStoreBundle:Default:form.html.twig',array('form'=>$form->createView()));
    }
   
}
