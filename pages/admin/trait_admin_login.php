<?php 
include "../../fonction/Fonction.php";
$nom=$_POST['nom'];
$mdp=$_POST['pwd'];
$check=checklogin($nom,$mdp,1);
if($check==true){
    session_start();
    $_SESSION['admin']=getuser($nom,$mdp,1);
    header("Location:admin_model.php");
}
else{
    header("Location:../../pages/model.php?nomPage=admin/admin_login.html");
}

?>