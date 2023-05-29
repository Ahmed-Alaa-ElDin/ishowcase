<?php

namespace App;

use App\Router\Router;
use DB;

class App
{
    private static $db;

    protected $router;
    protected $request;

    public function __construct($router,  $request,  $config = [])
    {
        $this->router = $router;

        $this->request = $request;

        static::$db = new DB($config);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run()
    {
        echo $this->router->resolve($this->request['uri'], $_SERVER['REQUEST_METHOD']);
    }
}
