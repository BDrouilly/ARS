<?php

namespace ARS\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ARSManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
