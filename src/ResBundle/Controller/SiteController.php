<?php

namespace ResBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use ResBundle\Entity\Site;
use ResBundle\Form\SiteType;

class SiteController extends Controller
{
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
		$list_sites=$em->getRepository('ResBundle:Site')->findAll();
		return $this->render('ResBundle:Sites:index.html.twig',array('sites'=>$list_sites));
	}

	public function addAction(Request $request)
    {
         $site = new Site();
         $em = $this->getDoctrine()->getManager();
         $session = new Session();
         $form= $this->get('form.factory')->create(SiteType::class,$site);
         
         if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
             
             $site->setDateadded(new \Datetime());
             $site->setDateedited(new \Datetime());
             $site->setUseradded($this->getUser());
             $em->persist($site);
             $em->flush();
             $session = new Session();
             $session->getFlashBag()->add('notice', 'Site ajouté avec succés !');
             return $this->redirectToRoute('admin_sites');
         }
         
         return $this->render('ResBundle:Sites:add.html.twig',array('form'=>$form->createView()));
    }

    public function editAction(Request $request, $id)
	{
			$em  =$this->getDoctrine()->getManager();
			$site = $em->getRepository('ResBundle:Site')->find($id);
			$form= $this->get('form.factory')->create(SiteType::class,$site);

			if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
             
            // $site->setDateadded(new \Datetime());
             $site->setDateedited(new \Datetime());
            // $site->setUseradded($this->getUser());
             $em->persist($site);
             $em->flush();
             $session = new Session();
             $session->getFlashBag()->add('notice', 'Site modifié avec succés !');
             return $this->redirectToRoute('admin_sites');
         }
         
         return $this->render('ResBundle:Sites:edit.html.twig',array('form'=>$form->createView()));

	}

	public function deleteAction($id)
	{
		$em  =$this->getDoctrine()->getManager();
		$site = $em->getRepository('ResBundle:Site')->find($id);
		if($site)
		{
			$em->remove($site);
			$em->flush();
			$response = new Response(json_encode(array('result' => "Echéc de suppression ")));
			$response->headers->set('Content-Type', 'application/json');
            return $response;
		}
		else
		{
			$response = new Response(json_encode(array('result' => "Echéc de suppression ")));
			$response->headers->set('Content-Type', 'application/json');
            return $response;

		}
	}

	public function  roomsAction()
	{
			return new Response('rooms Action');
	}

	
}
