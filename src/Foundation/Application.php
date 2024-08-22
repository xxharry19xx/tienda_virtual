<?php 

namespace Src\Foundation;

use Src\Routing\Router;

class Application{

    public Router $router;

    public static $folderViews = '';

    public function __construct($root_dir)
    {
        self::$folderViews = $root_dir . "/views";
        
        $this->router = new Router();
    }


    public function run(){
        $response = $this->router->compare();
        $response->send(); 
    }


}