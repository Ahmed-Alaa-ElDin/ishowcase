<?php

namespace App\Views;

use App\Exceptions\PageNotFoundException;

class View
{

    private $view;
    private $parameters;

    public function __construct($view, $parameters = [])
    {
        $this->view = $view;
        $this->parameters = $parameters;
    }

    public static function make($view,  $parameters = [])
    {
        return new static($view, $parameters);
    }

    public function render()
    {
        $viewPath = VIEW_PATH . '/' . $this->view . ".php";

        if (!file_exists($viewPath)) {
            throw new PageNotFoundException();
        }

        foreach ($this->parameters as $key => $value) {
            $$key = $value;
        }

        ob_start();

        include $viewPath;

        return (string) ob_get_clean();
    }
}
