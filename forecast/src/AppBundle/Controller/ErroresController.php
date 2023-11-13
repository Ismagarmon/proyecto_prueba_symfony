<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class ErroresController extends Controller
{

    public function getAction($id){
        if($id == null || $id != 1){
            throw $this->createNotFoundException('Aquí puedo poner lo que quiera'); // Es el nombre de la excepción
        }
        else {
            return new Response('Register: '.$id);
        }
    }

    public function createAction($username){
        if($username == null || $username != 'Admin'){
            throw $this->createAccessDeniedException('AccessDenied');
        }
        else {
            return new Response('Usuario: '.$username);
        }
    }
    
}