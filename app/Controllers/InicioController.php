<?php

namespace App\Controllers;

use Src\Http\Response;
use Src\Routing\Controller;
use Src\View\View;

class InicioController extends Controller {

    public function inicio(){

        $view = new View();
        return $view->render("portada");
    }

    public function productos(){
        $response = new Response('Productos mas modernos que puedas encontrar', 200);
        return $response;
    }
    
}