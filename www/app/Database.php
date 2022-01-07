<?php
namespace App;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => config('DB_HOST'),
            'database' => config('DB_NAME'),
            'username' => config('DB_USER'),
            'password' => config('DB_PASSWORD'),
            'charset' => config('DB_CHARSET'),
            'collation' => 'utf8_unicode_ci',
            'prefix' => config('DB_PREFIX'),
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}