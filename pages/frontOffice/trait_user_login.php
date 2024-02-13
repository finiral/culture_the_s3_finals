<?php 
include "../../fonction/Fonction.php";
$nom=$_POST["nom"];
$mdp=$_POST["pwd"];
$check=checklogin($nom,$mdp,0);
if($check==true){
    session_start();
    $id=getuser($nom,$mdp,0);
    $_SESSION["uid"]=$id;
    header("Location:user_model.php");
}
else{
    header("Location:../model.php?nomPage=frontOffice/user_login.html");
}

?>