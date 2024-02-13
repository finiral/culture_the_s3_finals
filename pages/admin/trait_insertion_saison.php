<?php  
include "../../fonction/Fonction.php";
$date=$_GET['date'];
$table=$_GET['mois'];
insertregeneration($table,$date);
var_dump($table);
header("Location:admin_model.php?t=choix_mois.php");
?>