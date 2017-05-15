<?php

class Task {
  protected $description;

  protected $completed;

    public function __construct($description)
      {
        $this->description = $description;
      }
}

require 'index.view.php';
