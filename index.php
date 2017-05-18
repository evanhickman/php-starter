<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('views/routes.php')
    ->direct(Request::uri(), Request::method());