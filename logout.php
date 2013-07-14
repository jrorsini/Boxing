<?php
session_start();
 
if (isset($_SESSION['id']))
{
 
$_SESSION = array();
session_destroy();
 
 header('Location: index.php');
}else{
    echo "Vous n'avez pas le droit d'acceder a cette page";
}
?>