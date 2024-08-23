<?php

namespace App\Controllers\Admin;

use Src\Routing\Controller;
use Src\View\View;

class ProductoController extends Controller{

    public function index(){
        $view = new View();
        return $view->render('admin/productos/index');
    }
}