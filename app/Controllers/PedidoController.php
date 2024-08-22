<?php
 
 namespace App\Controllers;

use Src\Http\Response;
use Src\Routing\Controller;

 class PedidoController extends Controller{

    public function pedidos(){

        $response = new Response('pagina para realizar pedidos', 200);
        return $response;
    }
 }
