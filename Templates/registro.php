<?php
	if (isset($_POST["cuentanueva"]) && isset($_POST["contranueva"])){
		//Conexión a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "usuarios");
		if (mysqli_connect_errno($conexion)) {
			echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{
			$cuenta = mysqli_real_escape_string ($conexion, $_POST["cuentanueva"]);
			$contra = mysqli_real_escape_string ($conexion, $_POST["contranueva"]);
			$oregano = md5(uniqid(rand(), true));
			$mix = hash('sha512', $oregano.$contra);
			unset($contra);
			$resultado = mysqli_query($conexion, "INSERT INTO usuario(nombre_usuario,password,oregano) VALUES('".$cuenta."','".$mix."','".$oregano."');");
			echo "USUARIO REGISTRADO CON EXITO";
		}
		mysqli_close($conexion);
	}
	else{
		echo "No esta correctamente completado el formulario de registro.";
	}
?>