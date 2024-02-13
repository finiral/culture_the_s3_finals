<?php 
include "../../fonction/Fonction.php";
$nomthe=$_GET['nom_the'];
$occupat=$_GET['occupation'];
$rendeme=$_GET['rendement'];
$prix=$_GET["prixvente"];
insertvariete($nomthe,$occupat,$rendeme,$prix);

header("Location:admin_model.php?t=table_the.php&i=form_the.php");
?>