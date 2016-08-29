<?php

namespace BenefitorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BenefitorBundle:Default:index.html.twig');
    }
}
