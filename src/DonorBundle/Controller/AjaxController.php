<?php

namespace DonorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    public function donateAction()
    {
        $response = array("code" => 100, "success" => true);
        return new Response(json_encode($response));
    }

    public function profileAction()
    {
        return $this->render('DonorBundle:Ajax:profile.html.twig', array(// ...
        ));
    }

    public function historyAction()
    {
        return $this->render('DonorBundle:Ajax:history.html.twig', array(// ...
        ));
    }

    public function settingsAction()
    {
        return $this->render('DonorBundle:Ajax:settings.html.twig', array(// ...
        ));
    }

}
