<?php 

namespace Src\Database;

use Illuminate\Database\Capsule\Manager;

class ORM{
    public static function init(){

        $manager = new Manager();

        // conexion de la base de datos atravez de un orm de la libreria Illuminate
        $manager->addConnection([
            'driver'=> 'mysql',
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'tienda_virtual',
            'port' => 3306,
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => ''

        ]);
    }
}