<?php

namespace App\Controllers\Admin;

use App\Models\Usuario;
use Src\Http\Response;
use Src\Routing\Controller;
use Src\View\View;

class UsuarioController extends Controller{


    public function index(){
        $view = new View();
        return $view->render('admin/usuarios/index');
    }

    public function search(){
        $view = new View();
        return $view->render('admin/usuarios/search');
    }

    public function create(){

        try{
             // crear un registro
            $usuario = new Usuario();
            $usuario->nombre_completo = 'harry silva';
            $usuario->email = 'harrysilva@gmail.com';
            $usuario->password = password_hash('123456', PASSWORD_DEFAULT);
            $usuario->save(); //TODO: ESTA FUNCION SE ENCARGA DE HACER EL INSERT INTO EN NUESTRA BASE DE DATOS.

            $response = new Response('Usuario registrado correctamente', 200);
            return $response;

        } catch (\Throwable $error){
            $response = new Response();
            $response->setContent("Error al registrar usuario:" . $error->getMessage());
            return $response;
        }

       
    }

}