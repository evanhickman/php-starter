<?php

require 'core/bootstrap.php';

require Router::load('views/routes.php')
    ->direct(Request::uri());