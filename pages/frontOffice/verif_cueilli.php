<?php 
    include "../../fonction/Fonction.php";
    $date=$_POST["date_cueil"];
    $idcueilleur=$_POST["cueilleur"];
    $idparcelle=$_POST["parcelle"];
    $poidscueilli=$_POST["poids_cueilli"];
    $reste=getRestantParcelle($idparcelle,$date);
    if($reste<$poidscueilli){
        echo json_encode("Insertion Impossible (reste de parcelle insuffisant)");
    }
    else{
        echo json_encode("Insertion reussie");
        insertCueillette($idcueilleur,$idparcelle,$date,$poidscueilli);
        
    }
?>