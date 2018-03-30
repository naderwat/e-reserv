<?php

namespace ResBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ResBundle:Default:index.html.twig');
    }
}
