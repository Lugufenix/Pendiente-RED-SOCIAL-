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
				echo "no mames este usuario no existe";//BORRRRRRRRRRRRRRRRRRRRRRRRRAAAAAAAAAAAAAAAAARRRRRRRRRRRRRRRRRR
				//Agregar pagina de invitacion a REGISTRARSE
//EL usuario es válido:
			else {
					if ($usuario === hash('sha512', $oregano.$contra))
					{
					echo"Bienvenido: ".$nombreusuario;
					SESSION_start();
					$_SESSION["nombre"]=$consulta["nombre_usuario"];
					//header("Location: ../Templates/muro.php");
					}
					else
						echo"Contraseña incorrecta";//BORRRRRRRRRRRRRRRRRRRRRRRRRAAAAAAAAAAAAAAAAARRRRRRRRRRRRRRRRRR
				}
		}
		mysqli_close($conexion);
	}
	//El usuario intenta acceder sin llenar formulario:
	else {
		echo "Formulario de inicio de sesion inválido.";
	}
?>