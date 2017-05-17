<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'views/routes.php';

var_dump($_SERVER);

// require $route->direct();
