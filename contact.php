<?php 

if (!empty($_POST)) {
	extract($_POST);
	$valid = true;
	if (empty($sujet)) {
		$valid=false;
	}
	if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i", $email)) {
		$valid=false;
	}
	if (empty($email)) {
		$valid=false;
	}
	if (empty($message)) {
		$valid=false;
	}
	if ($valid) {
		$to = "jeanroger.orsini@gmail.com";
		$header = "From : <$email>";
		if (mail($to, $sujet, $message, $header)) {
			$erreur = "Votre mail nous est bien parvenu";
			unset($email);
			unset($sujet);
			unset($message);
			header('Location: index.php');      
		}
		else{
			$erreur = "une erreur est survenue et votre mail";
		}
	}
}

?>