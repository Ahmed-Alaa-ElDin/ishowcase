<?php

use App\Controllers\WatchController;
use App\Router\Router;

$router = new Router;

$router->get('/', [WatchController::class, "index"])
    ->get('/product', [WatchController::class, "show"])
    ->get('/category', [WatchController::class, "filter"])
    ->post('/edit/large-title',[WatchController::class,"editLargeTitle"]);
