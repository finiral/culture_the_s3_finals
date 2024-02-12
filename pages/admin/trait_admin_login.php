<?php 
include "../../fonction/Fonction.php";
$nom="Jean";
$mdp="Jean";
$check=checklogin($nom,$mdp,1);
if($check==true){
    header("Location:admin_model.php");

}
else{
    header("Location:../../model.php?nomPage=./admin/admin_login.html");
}

?>