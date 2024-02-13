<?php

include "../../fonction/Fonction.php";
$nom=$_GET['nom'];
$genre=$_GET['genre'];
$dtn=$_GET['dtn'];
insertCueilleur($nom,$genre,$dtn);
header("Location:admin_model.php?t=table_cueilleur.php&i=form_cueilleur.php");
?>