<?php
include "../../fonction/Fonction.php";
$id=$_GET['id'];
$table=$_GET['table'];
$table=ucfirst($table);
supprimer($id,$table);
if ($table=="MvtSalaire") {
    
    $table="montant";
}
header("Location:admin_model.php?t=table_".$table.".php&i=form_".$table.".php");
?>