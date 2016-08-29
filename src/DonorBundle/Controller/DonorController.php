<?php

namespace DonorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DonorController extends Controller
{
    public function homeAction()
    {
        return $this->render('DonorBundle:Donor:home.html.twig', array(
            // ...
        ));
    }

}
