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
						<script src='../Documents/js/jquery-3.2.1.js'></script>
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
					<section class='withe'>
						<table id='prueba'>
						</table>
					</section>
						<script type='text/javascript'>
							$(document).ready(function() {
								var muro = [];
								$.ajax({
									dataType: 'json',
									url:'usuarios.php',
									type: 'POST',
									data: {
													'muro':'JSON.parse(muro)',
									},
									success: function(result) {
										var x = 0;
										var y = 0;
										while(result[x][y])
										{
											$('#prueba').append('<tr><td>'+result[x][y]+'</td></tr>');
											$('#prueba').append('<tr><td>'+result[x+1][y]+'</td><td>'+result[x+2][y]+'</td></tr>');
											y++;
										}
									}
								})
							});
						</script>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
		 <footer class='white page-footer'>
          <div class='purple footer-copyright'>
            <div class='container white-text'>
            © 2017 Copyright Text
            <a class='white-text right' href='http://www.prepa6.unam.mx'>Preparatoria 6 Antonio Caso</a>
            </div>
          </div>
 </footer>
					</body>";
?>
