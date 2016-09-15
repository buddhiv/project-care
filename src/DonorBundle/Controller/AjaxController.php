<?php

namespace DonorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    public function donateAction()
    {
        $template_data = $this->render('DonorBundle:Ajax:donate.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }

    public function profileAction()
    {
        $template_data = $this->render('DonorBundle:Ajax:profile.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }

    public function historyAction()
    {
        $template_data = $this->render('DonorBundle:Ajax:history.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }

    public function settingsAction()
    {
        $template_data = $this->render('DonorBundle:Ajax:settings.html.twig', array())->getContent();

        $data = array("code" => 100, "success" => true, "content" => $template_data);
        $response = new Response(json_encode($data), 200);
        $response->headers->set('Çontent-Type', 'application/json');
        return $response;
    }

}
