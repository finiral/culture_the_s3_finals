<?php 
include "../../fonction/Fonction.php";
$surface=$_GET['surface'];
$idthe=$_GET['the'];
insertParcelle($surface,$idthe);

header("Location:admin_model.php?t=table_parcelle.php&i=form_parcelle.php");
?>