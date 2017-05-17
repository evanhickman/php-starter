<?php

return array(
  'database' => array(
    'name'        => 'mytodo',
    'username'    => 'root',
    'password'    => '',
    'connection'  => 'mysql:host=127.0.0.1',
    'options'     => array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    )
  )
);
