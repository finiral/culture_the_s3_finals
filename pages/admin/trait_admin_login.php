<?php 
include "../../fonction/Fonction.php";
$nom="Jean";
$mdp="Jean";
$check=checklogin($nom,$mdp,1);
if($check==true){
    $id=getuser($nom,$mdp,1);
    var_dump(getinfo($id,"User"));
}
else{
    header("Location:model.php?nomPage=admin_login.html");
}

?>