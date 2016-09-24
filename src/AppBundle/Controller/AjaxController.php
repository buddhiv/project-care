<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 9/17/2016
 * Time: 12:27 AM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    public function donateAction()
    {
        $template_data = $this->render('AppBundle:Donor:donor_donate.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }

    public function profileAction()
    {
        $template_data = $this->render('AppBundle:Donor:donor_profile.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }

    public function historyAction()
    {
        $template_data = $this->render('AppBundle:Donor:donor_history.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }

    public function settingsAction()
    {
        $template_data = $this->render('AppBundle:Donor:donor_settings.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }
}