<?php

namespace App\Exceptions;

use Exception;

class PageNotFoundException  extends Exception
{
    protected $message = "Page Not Found";
}
