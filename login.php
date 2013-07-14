<?php
session_start();

require 'cnx.php';

if(empty($_SESSION['id'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
        if($_POST['email']!="" && $_POST['password']!=""){  
            $passhache = sha1($_POST['password']);            
            $req = $bdd->prepare('SELECT * FROM users WHERE email = :email AND pass= :pass ');
            $req->execute(array('email'=> $_POST['email'], 'pass'=> $passhache));
            $resultat = $req->fetch(); 
            if(!$resultat){
                echo "erreur test";
            }
            else{                 
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $resultat['pseudo'];
                $_SESSION['mail'] = $resultat['email'];
                header('Location: index.php');
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
?>