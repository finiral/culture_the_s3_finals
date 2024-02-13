<?php 
include "../../fonction/Fonction.php";
$nom=$_GET['catedepense'];
insertCateDepense($nom);
header("Location:admin_model.php?t=table_catedepense.php&i=form_catedepense.php");
?>