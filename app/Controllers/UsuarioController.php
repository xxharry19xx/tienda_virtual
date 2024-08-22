<?php

namespace App\Controllers;

use Src\Http\Response;
use Src\Routing\Controller;

class UsuarioController extends Controller{

    public function registro(){

        // $response = new Response();
        // $response->setContent("Pagina de inicio de la tienda virtual");
        // $response->setStatusCode(200);
        // return $response;

        $response = new Response('Registro de usuarios', 200);
        return $response;
    }

}