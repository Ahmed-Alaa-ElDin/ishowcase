<?php

namespace App\Router;

use App\Exceptions\RouteNotFoundException;

class Router
{
    private  $routes = [];

    public function register($method, $route, $action)
    {
        $this->routes[$method][$route] = $action;

        return $this;
    }

    public function get($route, $action)
    {

        return $this->register("GET", $route, $action);
    }

    public function post($route, $action)
    {
        return $this->register("POST", $route, $action);
    }

    public function resolve($url, $method)
    {
        $route = explode('?', $url)[0];

        $queryParams = [];

        if (strpos($url, '?') !== false) {
            $queryString = parse_url($url, PHP_URL_QUERY);
            parse_str($queryString, $queryParams);
        }

        $action = $this->routes[$method][$route] ?? null;

        // if (is_callable($action)) {
        //     return $action();
        // }
        
        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class;

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], [$queryParams]);
                }
            }
        }

        if (!$action) {
            throw  new RouteNotFoundException();
        }
    }
}
