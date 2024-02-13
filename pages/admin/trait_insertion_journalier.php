<?php
include "../../fonction/Fonction.php";
$minimal=$_GET['poidsmin'];
$bonus=$_GET['prctgbon'];
$malus=$_GET['prctgmal'];
$date=$_GET['date']; 
insertcondition($minimal,$bonus,$malus,$date);
echo "nety";
header("Location:admin_model.php?t=choix_mois.php");
?>