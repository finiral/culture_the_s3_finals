<?php 
include "../../fonction/Fonction.php";
    $dt=$_GET["date_depense"];
    $depense=$_GET["depense"];
    $montant=$_GET["montant"];
    insertMvtDepense($depense,$montant,$dt);
    header("Location:user_model.php?page=saisie_depense.php")
?>