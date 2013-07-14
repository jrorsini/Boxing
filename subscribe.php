<?php
session_start();

require 'cnx.php';

if (empty($_SESSION['id'])) {
    if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['email'])){
        if($_POST['pseudo']!="" && $_POST['password']!="" && $_POST['email']!=""){
            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}.[a-z]{2,4}$#", $_POST['email'])){
                $req = $bdd->prepare('SELECT id FROM users WHERE pseudo = :pseudo');
                $req->execute(array('pseudo'=> $_POST['pseudo']));
                $nb_resultats_recherche_membre=$req->fetch();
                if(!$nb_resultats_recherche_membre) {
                    $mdp = sha1($_POST['password']);    
                    $req=$bdd->prepare('INSERT INTO users(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
                    $req->execute(array('pseudo'=>$_POST['pseudo'], 'pass'=>$mdp, 'email'=>$_POST['email']));       
                }else{
                    echo "Un membre possede deja ce pseudo";
                }
            }else{
                echo "Votre adresse email n'est pas valide";
            }
        }else{
            echo "Il faut remplir tous les champs";
        }
    }else{
        echo "Une erreur s'est produite";
    }
}else{
    echo "Vous n'avez pas le droit d'acceder a cette page";
}
header('Location:http://localhost:8888/Boxing/');
?>