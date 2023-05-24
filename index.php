<?php

define('VIEW_PATH', __DIR__ . '/views');

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/app/Router/routes.php";
require_once __DIR__ . "/app/DB/DB.php";

use App\App;

(new App(
    $router,
    [
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => $_SERVER['REQUEST_METHOD'],
    ],
    [
        "dbName" => "ishowcase",
        "dbHost" => "localhost",
        "dbUser" => "root",
        "dbPassword" => ""
    ]
))->run();
