
<?php
echo"<body>";
$str="9am3rTU%";
echo($str);
echo "<br/><br/><br/><br/>";
$oregano = md5(uniqid(rand(), true));
$mix = hash('sha512', $oregano.$str);
//unset($str);
// Guardar en base de datos el $mix y $oregano
print_r($mix);
echo "</br>";
echo "</br>";
print_r($oregano);
echo "</br>";
echo "</br>";


$password="9am3rTU%";
if ($mix === hash('sha512', $oregano.$password))
{
	echo"Contraseña correcta!!!!!!";
}
else
	echo"Contraseña incorrecta perro";

echo"</body>";
?>

<!--Contraseñas:
1.kc5Ld@rT oregano: ae8d325f65f1c08831608fa6ab8536d8    mix: 2f80d1a9ee5050b4d0457e956323208aa74d4cce0d5d1c2c23c17f2f713135285e29c015e5bf5ae3dc3f62690f016ace9d547931510c6ce327bf5cb8542bfb7a
2.PelOTE5$ oregano: 39da9d3748ccd7b963a81467414f46ad    mix: bdfa13bd8c70297db5e697067519f322e165e83ddf11c834479433e2502413cdd362db5af7f8f30e31f3883e0a1a7f897af1f17ca55415236a827c162b7cdabe							
3.s0yM@urr oregano: 569cf780b2190a7f0b947a3262372565    mix: 6a395e14348f51e79e0123b2de4a8f4eca39c6ae00922c6b3f986b1e86b224545aaeac98d22df8150279082763efcb223d16e675e728dbacc3f760de5b4f4ed9
4.9am3rTU% oregano: ab16212c2514d2903631af1e512c9c1e    mix: cf17fbae587eaf580764381725cff7b7749cee3d7229a434f905ffaf97403d436f735add2faa33e7b36b9f900e4cad70d7c567abcae3953c683a91bfc8a0d053


-->