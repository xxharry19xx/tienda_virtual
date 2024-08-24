<?php 

namespace Src\View;

use Src\Foundation\Application;
use Src\Http\Response;

class View{

    public string $layout = '';
    public array $sections = [];

    public function setLayout(string $layout){
        $this->layout = $layout;
    }

    public function render($viewFile, array $parametros = [], $statusCode = 200){

        $contenido = $this->getContentView($viewFile, $parametros);

        if($this->layout != ''){
            $contenido = $this->getContentLayout();
        }

        $response = new Response();
        $response->setContent($contenido);
        $response->setStatusCode($statusCode);
        return $response;
    }
    
    private function getContentView($viewFile, $parametros){

        // obtener el contenido de un archivo de vista 
        $folderView = Application::$folderViews;
        $ruta = $folderView . "/" . $viewFile . ".php";
        extract($parametros);
        ob_start();
        require $ruta;
        return ob_get_clean();
    }

    private function getContentLayout(){

        // obtener el contenido de un archivo de vista 
        $folderView = Application::$folderViews;
        $ruta = $folderView . "/" . $this->layout . ".php";
        ob_start();
        require $ruta;
        return ob_get_clean();
    }

    public function startSection(string $section){

        $this->sections[$section] = '';
        ob_start();
    }

    public function endSection(string $section){
        $contentSection = ob_get_clean();
        $this->sections[$section] = $contentSection;
    }

    public function printSection(string $section){
        return $this->sections[$section] ?? 'Seccion no definida';
    }
}