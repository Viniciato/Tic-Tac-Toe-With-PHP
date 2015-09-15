<?php
function notEmpty($value, $key = null, &$errors = null){
  if (empty($value)){
    if ($key !== null && $errors !== null) {
      $msg = 'não deve ser vazio';
      $errors[$key] = $msg;
    }
    return false;
  }

  return true;
}

function isNumber($value, $key = null, &$errors = null){

  if (is_numeric($value)) { return true; }

  if ($key !== null && $errors !== null)
    $errors[$key] = 'não é um número';

  return false;
 }
?>
