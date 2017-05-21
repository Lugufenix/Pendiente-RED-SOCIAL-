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
					<nav>
					  <div class='nav-wrapper purple'>
						<a href='#!' class='brand-logo center'>Logo</a>
						<ul class='left hide-on-med-and-down'>
						  <li><a href='#'>¡Hola!  ".$_SESSION['nombre']."</a></a></li>
						  
						</ul>
						<ul class='right hide-on-med-and-down'>
						<li><a href='main.html'>Salir</a></a></li>  
						</ul>
					  </div>
					</nav>";
	
				echo " <footer class='white page-footer'>
          <div class='purple footer-copyright'>
            <div class='container white-text'>
            © 2017 Copyright Text
            <a class='white-text right' href='#!'>Preparatoria 6 Antonio Caso</a>
            </div>
          </div>
 </footer>
				
				
				</body>"	
					
					
?>