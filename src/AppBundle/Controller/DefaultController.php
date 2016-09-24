<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->redirectToRoute('home');
    }

    public function homeAction()
    {
        return $this->render('AppBundle:Default:home.html.twig');
    }

    public function resultsAction()
    {
        return $this->render('AppBundle:Default:results.html.twig');
    }
}
