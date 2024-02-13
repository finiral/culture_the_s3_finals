<?php
include "../../fonction/Fonction.php";
$id=$_GET['id'];
$table=$_GET['table'];
supprimer($id,ucfirst($table));
if ($table=="MvtSalaire") {
    
    $table="montant";
}
header("Location:admin_model.php?t=table_".$table.".php&i=form_".$table.".php");
?>