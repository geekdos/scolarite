<?php

namespace ScolariteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('ScolariteBundle:Home:home.html.twig', array(
            // ...
        ));
    }

}
