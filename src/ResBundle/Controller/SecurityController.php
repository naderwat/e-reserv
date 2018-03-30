<?php

namespace ResBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{

	public function indexAction()
	{

	    $listUser = $this->getDoctrine()
					 ->getManager()
					 ->getRepository('ResBundle:User')
					 ->findAll();
		return $this->render('ResBundle:Security:index.html.twig',array('users'=>$listUser));

	}


}
