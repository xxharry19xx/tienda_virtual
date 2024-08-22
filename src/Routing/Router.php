<?php

namespace Src\Routing;

use Src\Http\Request;
use Src\Http\Response;

class Router{

    public array $routes = [];

    public function get($url, $action){

        $this->routes["GET"][]=[
            'url'=> $url,
            'action' => $action
        ];
    }

    public function post($url, $action){

        $this->routes["POST"][]=[
            'url' => $url,
            'action' => $action
        ];

    }

    public function compare(){
        $request = Request::createFromGlobals();
        $url = $request->getPathInfo();
        $metodo_http = $request->getMethod();

        // comparar 
        $rutas = $this->routes[$metodo_http];
        $action = false;

        foreach ($rutas as $ruta){
            if($ruta["url"] == $url){
                $action = $ruta["action"];
                break;
            }
        }

        // en el caso que no se encontro alguna concidencia con la ruta 
        if($action === false){
            // $response = new Response('No existe esta ruta',404);
            $response = new Response();
            $response->setContent("no encontrado");
            $response->setStatusCode(404);
            return $response;
        }

        // si es que si se encuentra la ruta le damos otra respuesta 
        // otro forma de acerlo 
        // $response = new Response('Accion encontrasa', 200);s
        // $response = new Response();
        // $response->setContent("Accion encontrado");
        // $response->setStatusCode(200);
        // return $response;


        // cacturar el controlador y el metodo
        $controlador = $action[0];
        $metodo_controlador = $action[1];
        $objeto_controlador = new $controlador();
        
        return call_user_func_array([$objeto_controlador, $metodo_controlador], []);
    }
}