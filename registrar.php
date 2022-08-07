<?php

// PASO 1:

	include("conexion-bd.php");

// if ($conexion){
// 	echo "Se conectó correctamente a la base de datoso";
// }
// else{
// 	echo "No se pudo conectar a la base de datos";
// }


// PASO 2:
	// Si presiono el boton registrar (enviar en html) hacer
	if (isset($_POST['register'])) {
			// si no estan vacios los campos username e email, es decir, si el campo nombre de usuario tiene 1 carater o mas y el campo email
			if (strlen($_POST['username']) >= 1 && strlen($_POST['email']) >= 1) {
				// $username = ($_POST['username']);
				// $email = ($_POST['email']);

				// trim --> elimina espacios en blanco al comienzo y al final
				$username = trim($_POST['username']);
				$email = trim($_POST['email']);
				$fechareg = date("y/m/d");
				$consulta = "INSERT INTO `datos_usuario`(`nombre`, `email`, `fecha_registro`) VALUES ('$username','$email','$fechareg')";

				// $conexion --> variable que contiene la conexion a la base de datos
				// $consulta --> variable que contiene la sentencia para insertar los datos en la tabla
				$resultado = mysqli_query($conexion,$consulta);

				if ($resultado) { // Si se ha establecido la conexion a la base de datos
					?>
					<h2 class="registro_ok">¡Usuario creado correctamente!</h2>
						<?php
				} else {
					?>
					<h2 class="registro_error">¡Error: Usuario no creado!</h2>
						<?php
				}
			}   else {
					?>
					<h3 class="registro_error">¡Por favor digite nombre de usuario y correo electrónico!</h3>
						<?php
			}
	}


?>