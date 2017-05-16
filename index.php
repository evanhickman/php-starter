<?php

require 'functions.php';
require 'database/Connection.php';
require 'Task.php';

$pdo = Connection::make();

require 'index.view.php';
