<?php

namespace ResBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ResBundle\Form\RoomType;
use ResBundle\Entity\Room;

class RoomsController extends Controller
{


	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
		$list_rooms = $em->getRepository('ResBundle:Room')->findAll();
		return $this->render('ResBundle:Rooms:index.html.twig',array('rooms'=>$list_rooms));
	}

	public function addAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$room = new Room();
		$form = $this->get('form.factory')->create(RoomType::class,$room);
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
		{
			$room->setUseradded($this->getUser());
			$room->setDateadded(new \DateTime());
			$room->setDateedited(new \DateTime());
			$em->persist($room);
			$em->flush();
			return $this->redirectToRoute('admin_rooms');
		}
		return $this->render('ResBundle:Rooms:add.html.twig',array('form' =>$form->createView()));
	}

	public function editAction(Request $request,$id)
	{

		$em = $this->getDoctrine()->getManager();
		$room = $em->getRepository('ResBundle:Room')->find($id);
		$form = $this->get('form.factory')->create(RoomType::class,$room);
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
		{
			
			
			$room->setDateedited(new \DateTime());
			$em->persist($room);
			$em->flush();
			return $this->redirectToRoute('admin_rooms');
		}
		return $this->render('ResBundle:Rooms:edit.html.twig',array('form' =>$form->createView()));
	}

	public function deleteAction($id)
	{
		$em  =$this->getDoctrine()->getManager();
		$room = $em->getRepository('ResBundle:Room')->find($id);
		if($room)
		{
			$em->remove($room);
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
	public function viewAction()
	{

	}
}
