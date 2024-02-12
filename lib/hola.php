<?php
	// Autor: Paula Crespo <paulacrespo@gmail.com>
	// El nombre por defecto es Mundo
	require ('HolaMundo.php');

	$nombre = isset($arvg[1] ? $arvg[1] : "Mundo");
	print new HolaMundo($nombre);
?>
