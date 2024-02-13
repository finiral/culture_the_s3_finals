<?php 
include "../../fonction/Fonction.php";
$nomthe=$_GET['nom_the'];
$occupat=$_GET['occupation'];
$rendeme=$_GET['rendement'];
insertvariete($nomthe,$occupat,$rendeme);

header("Location:admin_model.php?t=table_the.php&i=form_the.php");
?>