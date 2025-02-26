<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
</head>
<body>
	<?php
		/*
			Tabla a HTML
			Redirect
			Procesar
			Switch
			Function
			Alert
		*/
		if ($_POST) {
			$accion = $_POST['accion'];

			function ejecutar_query($sql){
				include 'conn.php';
				if ($conn->query($sql) === TRUE) {
			        return 'ok';
			    } else {
			        echo "Error: " . $conn->error;
			    }
			    $conn->close();
			}

			switch ($accion) {
				case 'crear':
					$nombre = $_POST["nombre"];
				    $telefono = $_POST["telefono"];
				    $correo = $_POST["correo"];
				    $sql = "INSERT INTO contactos (nombre, telefono, correo) VALUES ('$nombre', '$telefono', '$correo')";
				    if (ejecutar_query($sql) == 'ok') {
	?>
				    	<script>
				            Swal.fire({
				                icon: 'success',
				                title: 'Listo !!!',
				                text: '<?php echo $nombre ?> Agregado Exitosamente!'
				            }).then(function() {
							    window.location = "index.php";
							});
				        </script>
	<?php
				    }
					break;

				case 'borrar':
					$id = $_POST['id'];
	    			$sql = "DELETE FROM contactos WHERE id=$id";
	    			if (ejecutar_query($sql) == 'ok') {
	?>
				    	<script>
				            Swal.fire({
				                icon: 'success',
				                title: 'Listo !!!',
				                text: 'Usuario Eliminado Exitosamente!'
				            }).then(function() {
							    window.location = "index.php";
							});
				        </script>
	<?php
				    }
					break;
			}
		}
	?>
</body>
</html>