<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 9/17/2016
 * Time: 12:26 AM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DonorController extends Controller
{
    public function homeAction()
    {
        return $this->render('AppBundle:Donor:donor_layout.html.twig');
    }

}