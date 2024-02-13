<?php 
    $dt1=$_GET["date_debut"];
    $dt2=$_GET["date_fin"];
    $lien="Location:user_model.php?page=paiement_cueilleur.php&dt1=%s&dt2=%s";
    $lien=sprintf($lien,$dt1,$dt2);
    header($lien);
?>