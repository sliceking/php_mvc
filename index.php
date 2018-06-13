<?php

use App\Core\Request;
use App\Core\Router;

require 'vendor/autoload.php';

require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
