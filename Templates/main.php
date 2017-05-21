<?php
/*En este php, se accede a los datos de la base de datos, se comprueba el usuario, asi como la contraseña y redirecciona segun el caso a los diferentes mensajes 
	de error*/	
	if (isset($_POST["cuenta"]) && isset($_POST["contra"])){
		//Conexión a la base de datos
				
		
		$conexion = mysqli_connect("localhost", "root", "", "usuarios");
		if (mysqli_connect_errno($conexion)) {
			echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{
			$cuenta=$_POST["cuenta"];
			$resultado = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre_usuario='".$cuenta."';");
			$consulta= mysqli_fetch_assoc($resultado);
			$usuario=$consulta["password"];
			$oregano=$consulta["oregano"];	
			$contra=$_POST["contra"];
			$nombreusuario=$consulta["nombre_usuario"];	
				//Comprobar si el usuario existe
			if ($usuario=="")
			{
					echo "<script>";
					echo "alert('¿Primera vez en la página? ¡Registrate!');";  
					echo "window.location = 'main.html';";
					echo "</script>";
//EL usuario es válido:
			}
			else {
					if ($usuario === hash('sha512', $oregano.$contra))
					{
					SESSION_start();
					$_SESSION["nombre"]=$consulta["nombre_usuario"];
					$_SESSION["id"]=$consulta["id_usuario"];
					

					echo "<script>";
					echo "alert('Bienvenido Denuevo!');";  
					echo "window.location = 'muro.php';";
					echo "</script>"; 
					}
					echo "<script>";
					echo "alert('Tu contraseña es incorrecta');";  
					echo "window.location = 'main.html';";
					echo "</script>";  
				}
		}
		mysqli_close($conexion);
	}
	else {
		echo "Formulario de inicio de sesion inválido.";
	}
?>