<?php
  $conexion = mysqli_connect("localhost", "root", "", "usuarios");
  mysqli_set_charset($conexion, "utf8");
  $x = 0;
  if (mysqli_connect_errno($conexion)) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  }
  // En caso que la conexion sea exitosa, se mete al programa
  else{
    $consulta="SELECT nombre_usuario,texto_publicacion,tiempo_publicacion FROM usuario JOIN publicacion ON usuario.id_usuario=publicacion.id_usuario";
    $resultado = mysqli_query($conexion,$consulta);
    while($fila= mysqli_fetch_assoc($resultado))
    {
      $usuario[$x] = $fila['nombre_usuario'];
      $publicacion[$x] = $fila['texto_publicacion'];
      $fecha[$x] = $fila['tiempo_publicacion'];
      $x++;
    }
    $muro = array($usuario,$publicacion,$fecha);
    $muro = json_encode($muro,JSON_UNESCAPED_UNICODE);
    echo $muro;
  }
?>
