<?php 
include "../../fonction/Fonction.php";
$montant=$_GET['montant'];
$date=$_GET['date'];
insertMvtSalaire($montant,$date);
header("Location:admin_model.php?t=table_montant.php&i=form_montant.php");
?>