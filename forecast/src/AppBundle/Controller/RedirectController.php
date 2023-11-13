<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// use Symfony\Component\HttpFoundation\Response;

class RedirectController extends Controller
{

    public function InternalRedirectAction(){


        return $this->redirectToRoute("weather_index");
        
    }

    public function ExternalRedirectGoogleAction() {
        return $this->redirect("https://google.es");
    }

    public function ExternalRedirectAction() {
        return $this->redirectToRoute("weather_index", array(), 301);
    }

    
}