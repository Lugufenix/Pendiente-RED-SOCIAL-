CREATE TABLE usuario(
	id_usuario int AUTO_INCREMENT PRIMARY KEY,
	nombre_usuario varchar(20),
	password char(128),
	oregano char(32)
);

INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("mcmanus","2f80d1a9ee5050b4d0457e956323208aa74d4cce0d5d1c2c23c17f2f713135285e29c015e5bf5ae3dc3f62690f016ace9d547931510c6ce327bf5cb8542bfb7a","ae8d325f65f1c08831608fa6ab8536d8");
INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("elpelucas","bdfa13bd8c70297db5e697067519f322e165e83ddf11c834479433e2502413cdd362db5af7f8f30e31f3883e0a1a7f897af1f17ca55415236a827c162b7cdabe","39da9d3748ccd7b963a81467414f46ad");
INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("elminimau","6a395e14348f51e79e0123b2de4a8f4eca39c6ae00922c6b3f986b1e86b224545aaeac98d22df8150279082763efcb223d16e675e728dbacc3f760de5b4f4ed9","569cf780b2190a7f0b947a3262372565");
INSERT INTO usuario(nombre_usuario,password,oregano) VALUES("lucaloco","cf17fbae587eaf580764381725cff7b7749cee3d7229a434f905ffaf97403d436f735add2faa33e7b36b9f900e4cad70d7c567abcae3953c683a91bfc8a0d053","ab16212c2514d2903631af1e512c9c1e");