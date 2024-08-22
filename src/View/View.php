<?php 

namespace Src\View;

use Src\Foundation\Application;
use Src\Http\Response;

class View{

    public function render($viewFile, $statusCode = 200){

        $contenido = $this->getContentView($viewFile);
        $response = new Response();
        $response->setContent($contenido);
        $response->setStatusCode($statusCode);
        return $response;
    }
    
    private function getContentView($viewFile){

        // obtener el contenido de un archivo de vista 
        $folderView = Application::$folderViews;
        $ruta = $folderView . "/" . $viewFile . ".php";
        ob_start();
        require $ruta;
        return ob_get_clean();
    }
}