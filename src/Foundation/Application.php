<?php 

namespace Src\Foundation;

use Src\Database\ORM;
use Src\Routing\Router;

class Application{

    public Router $router;

    public static $folderViews = '';

    public function __construct($root_dir)
    {
        self::$folderViews = $root_dir . "/views";
        
        $this->router = new Router();
        ORM::init();//TODO: CONEXION A LA BASE DE DATOS
    }


    public function run(){
        $response = $this->router->compare();
        $response->send(); 
    }


}