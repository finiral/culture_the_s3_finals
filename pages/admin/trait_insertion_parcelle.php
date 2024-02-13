<?php 
include "../../fonction/Fonction.php";
$surface=$_GET['surface'];
$idthe=$_GET['the'];
insertParcelle($surface,$idthe);

header("Location:admin_model.php?t=table_the.php&i=form_the.php");
?>