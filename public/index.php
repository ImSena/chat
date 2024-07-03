<?php

require_once '../config/configDefines.php';
require_once ROOT_DIR . 'vendor/autoload.php';

use App\Core\Router;

$router = new Router();

$router->run();