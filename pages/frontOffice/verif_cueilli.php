<?php 
    include "../../fonction/Fonction.php";
    $date=$_POST["date_cueil"];
    $idcueilleur=$_POST["cueilleur"];
    $idparcelle=$_POST["parcelle"];
    $poidscueilli=$_POST["poids_cueilli"];
    $reste=getRestantParcelle($idparcelle,$date);
    if($reste<$poidscueilli){
        echo "blublu";
    }
    else{
        insertCueillette($idcueilleur,$idparcelle,$date,$poidscueilli);
        echo "ok";
    }
?>