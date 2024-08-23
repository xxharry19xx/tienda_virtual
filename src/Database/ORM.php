<?php 

namespace Src\Database;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

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

        $manager->setEventDispatcher(new Dispatcher(new Container));

        // Make this Capsule instance available globally via static methods... (optional)
        $manager->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $manager->bootEloquent();
    }
}