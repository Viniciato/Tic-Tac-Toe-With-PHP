<?php
if (isset($_POST['field'])) 
{
	if (isset($_POST['new'])) 
	{
		unset($_POST['field']);
	}

	if ($_POST['jogador'])
	{
		$jogador = $_POST['jogador'];
	}

	if ($_POST['counter']) {
		$counter = $_POST['counter'];
		$counter++;
	}

	$field[0] = $_POST['field'][0];
	$field[1] = $_POST['field'][1];
	$field[2] = $_POST['field'][2];
	$field[3] = $_POST['field'][3];
	$field[4] = $_POST['field'][4];
	$field[5] = $_POST['field'][5];
	$field[6] = $_POST['field'][6];
	$field[7] = $_POST['field'][7];
	$field[8] = $_POST['field'][8];

	$field[$_POST['botoes']] = $jogador;

	if ($field[0] == $jogador & $field[1] == $jogador & $field[2] == $jogador | $field[3] == $jogador & $field[4] == $jogador & $field[5] == $jogador | 
		$field[6] == $jogador & $field[7] == $jogador & $field[8] == $jogador | $field[0] == $jogador & $field[3] == $jogador & $field[6] == $jogador | 
		$field[1] == $jogador & $field[4] == $jogador & $field[7] == $jogador | $field[2] == $jogador & $field[5] == $jogador & $field[8] == $jogador | 
		$field[0] == $jogador & $field[4] == $jogador & $field[8] == $jogador | $field[2] == $jogador & $field[4] == $jogador & $field[6] == $jogador )
	{
		$ganhador = 1;
	}
	else if ($jogador == 'O') 
	{
		$jogador = 'X';
	}
	else
	{
		$jogador = 'O';
	}
	if ($counter == 10 && @$ganhador != 1) {
		$ganhador = 2;
	}

}
?>