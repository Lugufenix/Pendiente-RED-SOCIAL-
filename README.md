# HI-9

Desarrollo de un sistema de red social, como parte de un proyecto enfocado al Diseño WEB.

Integrantes:
--------------------

  + Gaytán Nava Aarón Emmanuel.
  +	Reyes Farfán Andrea. 
  + Marquez Valdez Luis.
  + Alejandro (anotate).


Requerimentos del sistema
--------------------

  + XAMPP
  + Mysql
  + Sistema Operativo de 32 bits




Instalación del sistema:
--------------------


-Descargar XAMPP: https://www.apachefriends.org/es/index.html

-Inicializar XAMPP y Mysql.

-Crear una carpeta con el nombre redsocial

-Descargar este repositorio y guardarlo en: C:\xampp\htdocs\redsocial

-Copiar el archivo usuario.sql ubicado en: C:\xampp\htdocs\redsocial\BD y colocarlo en  C:\xampp\mysql\bin

-Abrir cmd.exe (CTRL+R, escribir: cmd).

-Escribir: mysql -u root

*En el caso de existir diversos usuarios/permisos, sustituir root, con el usuario ADMINISTRADOR seguido de un espacio y su contraseña.*


-Escribir: CREATE DATABASE usuarios;

-Escribir: EXIT


-Escibir: mysql -u root usuarios < usuario.sql

*En el caso de existir diversos usuarios/permisos, sustituir root, con el usuario ADMINISTRADOR seguido de un espacio y su contraseña.*

-Cerrar CMD.

-Dirigirse a  C:\xampp\htdocs\redsocial\templates.

-Ejecutar main.html en su navegador favorito.
