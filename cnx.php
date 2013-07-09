<?php 

$serveur = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'boxingtest';
$port = '3306';

// $serveur = 'mysql5-20.perso';
// $user = 'jrorsiniphotomat';
// $pass = 'greatest2b';
// $bdd = 'jrorsiniphotomat';
// $port = '3306';

try {
	$bdd = new PDO('mysql:host='.$serveur.';port='.$port.';dbname='.$db, $user, $pass);
}catch (PDOException $e) {
	echo $e->getMessage();
}

?>