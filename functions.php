<?php

function ageChecker($age) {
  if ($age >= 21) {
    echo 'Come on in!';
  } else {
    echo 'Scram kid!';
  }
}

function dd($data) {
  echo '<pre>';
    die(var_dump($data));
  echo '</pre>';
}
