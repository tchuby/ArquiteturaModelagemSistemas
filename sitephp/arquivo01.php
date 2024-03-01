<?php
// originario C -> C++/Java/C#/PHP
//phpinfo();
/*
echo "Alô mamãe!<br>";

echo 'Bimbim<br>';

// tipagem opcional 
$variavel = "Minha primeira variável";
$aprovado = true;
$idade = 10;

echo "Idade é: ".$idade."<br>";
echo "Idade é: {$idade}<br>";

if($aprovado){
	# $aprovado == true
	# $aprovado === true
}


$_COOKIE["nome"] = "Joselito";
*/
session_start();

$_SESSION["auth"] = true;
$_SESSION["name"] = "Joselito";
?>