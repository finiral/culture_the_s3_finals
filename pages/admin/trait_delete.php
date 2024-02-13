<?php
include "../../fonction/Fonction.php";
$id=$_GET['id'];
$table=$_GET['table'];
supprimer($id,$table);
header("Location:admin_model.php?t=table_".$table.".php&i=form_".$table.".php");
?>