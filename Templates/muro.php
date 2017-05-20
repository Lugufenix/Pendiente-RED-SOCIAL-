<?php
	SESSION_start();
	
		  echo "<!DOCTYPE html>
				<html>
					<head> 
					<!--Etiquetas del tipo de alfabeto-->
						<meta charset='utf-8'/>
						<meta http-equiv='X-UA-Compatible' content='IE=edge'/>
						<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
					<!--Links de materialize y el css/less-->
						<link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'/>
						<link type='text/css' rel='stylesheet' href='../Documents/css/materialize.css'  media='screen,projection'/>
						<link href='../Documents/css/main.css' type='text/css' rel='stylesheet' media='screen,projection'/>
					<!--Etiquetas referetes al encabezado de la página-->
						<title>Red Social</title>
						<!--Opciones de icono-->
						<link rel='shortcut icon' href='../Sources/icono2.png' type='image/png'/>
					</head> 
					
					
					<body>
					<nav class='purple' role='navigation'>
						<div class='nav-wrapper container'>
							<a class='brand-logo center'>Logo</a>
							<a href='' class='left'>¡Hola! ".$_SESSION['nombre']."</a>
							<form action='main.html' method='POST'>
							<input type='submit' class='right waves-effect waves-purple btn-flat white-text' value='Salir' name='bye'/>
							</form>
							</div>
						</nav>
					</body>";
					
					$conexion = mysqli_connect("localhost", "root", "", "usuarios");
										if (mysqli_connect_errno($conexion)) {
											echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
										}
										// En caso que la conexion sea exitosa, se mete al programa
										else{
											/*$consulta=$_POST["consulta"];
											$resultado = mysqli_query($conexion, "SELECT * FROM todo WHERE id_animal=".$consulta.";");
											$fila= mysqli_fetch_assoc($resultado);
												print_r ($fila);
											*/
											$consulta=$_SESSION['id'];
											$resultado = mysqli_query($conexion, "SELECT * FROM comentario WHERE id_usuario=".$consulta.";");
											echo "Estos son los resultados";
											//print_r $resultado;
										}
									
					
					
					
					
					
					
?>