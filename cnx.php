<?php 

$serveur = 'localhost';
$user = 'root';
$pass = 'root';
$bdd = 'boxingtest';
$port = '3306';

// $serveur = 'mysql5-20.perso';
// $user = 'jrorsiniphotomat';
// $pass = 'greatest2b';
// $bdd = 'jrorsiniphotomat';
// $port = '3306';

try {
	$cnx = new PDO('mysql:host='.$serveur.';port='.$port.';dbname='.$bdd, $user, $pass);
}catch (PDOException $e) {
	echo $e->getMessage();
}

?>