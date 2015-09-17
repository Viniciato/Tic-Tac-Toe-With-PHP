<?php 
if (!isset($counter)) {
	$counter = 1;
}
if (!isset($jogador)) {
  $al=rand(1,100);
  $al = $al%2;
  if($al == 0)
    $jogador = 'O';
  else
    $jogador = 'X';
}?>