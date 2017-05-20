CREATE TABLE usuario(
	id_usuario int AUTO_INCREMENT PRIMARY KEY,
	nombre_usuario varchar(20),
	password char(128),
	oregano char(32)
);

CREATE TABLE publicacion(
	id_publicacion int AUTO_INCREMENT PRIMARY KEY,
	id_usuario int REFERENCES usuario,
	texto_publicacion varchar(800),
	tiempo_publicacion datetime
);
CREATE TABLE comentario(
	id_comentario int AUTO_INCREMENT PRIMARY KEY,
	id_publicacion int REFERENCES publicacion,
	id_usuario int REFERENCES usuario,
	texto_comentario varchar(800),
	tiempo_comentario datetime
);

INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("mcmanus","2f80d1a9ee5050b4d0457e956323208aa74d4cce0d5d1c2c23c17f2f713135285e29c015e5bf5ae3dc3f62690f016ace9d547931510c6ce327bf5cb8542bfb7a","ae8d325f65f1c08831608fa6ab8536d8");
INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("elpelucas","bdfa13bd8c70297db5e697067519f322e165e83ddf11c834479433e2502413cdd362db5af7f8f30e31f3883e0a1a7f897af1f17ca55415236a827c162b7cdabe","39da9d3748ccd7b963a81467414f46ad");
INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("elminimau","6a395e14348f51e79e0123b2de4a8f4eca39c6ae00922c6b3f986b1e86b224545aaeac98d22df8150279082763efcb223d16e675e728dbacc3f760de5b4f4ed9","569cf780b2190a7f0b947a3262372565");
INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("lucaloco","cf17fbae587eaf580764381725cff7b7749cee3d7229a434f905ffaf97403d436f735add2faa33e7b36b9f900e4cad70d7c567abcae3953c683a91bfc8a0d053","ab16212c2514d2903631af1e512c9c1e");

INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(1,"Alguien que me ayude con lo de Canabal????","2017-2-15 17:20:03");
INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(4,"Por qué ella no me ama? :'v","2017-2-17 10:05:20");
INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(4,"Es porque soy feo??","2017-2-23 15:05:23");
INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(2,"io s0yy Ünic0 y d3f2erinte :s mi pacman está torcido, igual que mi alma (JAJA bueno, Alma no está torcida)","2017-3-25 14:02:50");
INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(3,"El problema de las redes sociales es que llega un punto en el que ya no tienes ni idea de qué publicar, o simplemente te dan ganas de odiar a todos y botar (biba el boto libre :v) todo :v. BTW, alguien ya vio Los Guardianes de la Galaxia 2?? Sale uno de estos: :V pero gigante JAJAJA","2017-3-25 16:22:59");
INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(1,"Güeno, pues Mauricio, Alma, Adrián, Lucatero, Ramón y yo sabemos que podrán lograr que esto se vea bonito morros","2017-3-30 9:30:5");
INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(2,"No se trata de echarle la culpa exclusiva a una marca que decide regalar poleras, se trata de analizar por qué lo hacen y desde dónde lo hacen. jeres que compren en sus tiendas sean idealmente talla 38; si en toda su historia han exhibido comerciales donde pontifican ser de los cinco continentes y no tienen a ningún niño mapuche o gordo, por ejemplo. Las  la ciudad.","2017-4-15 22:18:26");
INSERT INTO publicacion(id_usuario,texto_publicacion,tiempo_publicacion) VALUES(3,"Son las 4:20!!! OMG","2017-5-20 04:20:25");

INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(1,2,"x2","2017-2-15 20:05:05");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(1,3,"x3 y todos a final","2017-3-16 21:12:25");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(3,2,"Hhhmmm 7u7 I don't think so, babeeee","2017-3-1 05:06:20");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(2,2,"Yo te amooo","2017-2-20 11:20:26");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(2,3,"Wooo, wooo, tranquilo vaquero","2017-2-21 23:26:35");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(4,2,"Ste naco","2017-4-12 20:20:20");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(5,4,"Jaja Madero khé?","2017-5-26 21:21:21");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(6,1,"No, pos la verdad no","2017-4-10 04:15:14");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(6,3,"Paaaaara nada jeje >:v","2017-5-10 15:02:26");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(6,2,"Ñiiiooooo","2017-5-11 08:20:30");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(7,1,"Lo que sí alegra respecto del intento ridículo de Ripley por mercantilizar un movimiento social más que necesario, es que no estamos dormidos. Fueron diversos los medios que repudiaron la acción, trayendo a la memoria el ataque lesbofóbico en la sucursal del Costdel lugar a la pareja de mujeres. Les tengo malas noticias, estimados altos mandos de Ripley: no les vamos a prestar ropa.","2017-5-19 19:30:20");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(7,2,"Im Rahmen eines Joint-Venture mit der National University of Singapore hat die TU München eine Niederlassung in Singapur eröffnet. Das TUM ASIA – German Institute of Science and Tech ETH Zürich, University of Cambridge, UC Berkeley, MIT, Hebrew University Jerusalem, Technion Haifa, SJTU.","2017-5-16 20:06:30");
INSERT INTO comentario(id_publicacion,id_usuario,texto_comentario,tiempo_comentario) VALUES(8,2,"Ste ridículo","2017-5-17 08:30:30");