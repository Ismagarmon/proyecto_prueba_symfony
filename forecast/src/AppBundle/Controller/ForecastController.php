<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// use Symfony\Component\HttpFoundation\Response;

class ForecastController extends Controller
{
    public function indexAction(){
        return new Response('Hola, la redirección fue ok.');
    }

    public function indexParamAction($weather){


        return $this->render('weather/index.html.twig', array('tiempo' => $weather));
        
    }

    public function index2ParamAction($weather,$temperatura, Request $request){

        $ciudad = $request->query->get("city");
        return $this->render('weather/index.html.twig', array('tiempo' => $weather,'temperatura' => $temperatura, 'city' => $ciudad));
        
    }
}