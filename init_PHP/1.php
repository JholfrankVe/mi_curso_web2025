<?php
	// Este es un comentario

	/*
	Este es un comentario en bloque
	dsfgsd
	sdfsdfsd
	*/
	$hola = 'Hola Mundo!';

	echo $hola;

	$entero = 15;
	$decimal = 3.14;
	$string = 'OCHOA';
	$bool = true;

	echo '<br>Entero: '.$entero;

	$nombre = 'PEDRO';
	$nombre = 'OCHOA';

	echo '<br>Hola '.$nombre;

	$edad = 11;

	if ($edad >= 18)  {
		echo '<br>Eres mayor de Edad y tu edad es:'.$edad;
	}
	else{
		echo '<br>Eres menor de Edad y tu edad es:'.$edad.'<br>';
	}

	for ($i=1; $i <= 5 ; $i++) {
		echo 'Numero => '.$i.'<br>';
		// echo "Numero => $i<br>";
	}

	echo '------------------------';


?>