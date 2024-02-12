<?php 
include "base.php";
function checklogin($identifiant,$motdepasse,$type){
    $rep=false;
   // $mdp=sha1($motdepasse);
    $base=dbConnect();
    $requete="select * from User where Pseudo='%s' and Mdp=sha1('%s') and  Type_User='%d'";
    $requete=sprintf($requete,$identifiant,$motdepasse,$type);
    $result=mysqli_query($base,$requete);
    $isa=mysqli_num_rows($result);
    if($isa==1){
        $rep=true;
    }
    else{
        $rep=false;
    }
    return $rep;

}
function getuser($identifiant,$motdepasse,$type){
    $base=dbconnect();
    $requete="select * from User where Pseudo='%s' and Mdp=sha1('%s') and Type_User='%d'";
    $requete=sprintf($requete,$identifiant,$motdepasse,$type);
    $result=mysqli_query($base,$requete);
     while($donnees=mysqli_fetch_assoc($result)){
         $rep=$donnees['id_User'];
     }  
    return $rep;
} 
function getinfo($id,$table){
    $rep=array();
    $base=dbconnect();
    $requete="select * from %s where id_%s='%d'";
    $requete=sprintf($requete,$table,$table,$id);
    $result=mysqli_query($base,$requete);
     while($donnees=mysqli_fetch_assoc($result)){
         $rep[]=$donnees;
     }  
    return $rep;
}
function insertvariete($nom,$occupation,$rendement){
    $base=dbconnect();
    $requete="insert into The values(null,'%s','%o','%o')";
    $requete=sprintf($requete,$nom,$occupation,$rendement);
    $result=mysqli_query($base,$requete);
}
function modifvariete($idthe,$nom,$occupation,$rendement){
    $base=dbconnect();
    $requete="update The set Nom_the='%s',Occup;ation='%o',Rendement='%o' where id_The='%d'";
    $requete=sprintf($requete,$nom,$occupation,$rendement,$idthe);
    $result=mysqli_query($base,$requete);
}
function supprimer($id,$table){
    $base=dbconnect();
    $requete="delete from %s where id_%s='%d'";
    $requete=sprintf($requete,$table,$table,$id);
        $result=mysqli_query($base,$requete);
}
function insertParcelle($surface,$idthe){
    $base=dbconnect();
    $requete="insert into Parcelle values(null,'%o','%d')";
    $requete=sprintf($requete,$surface,$idthe);
    $result=mysqli_query($base,$requete);
}
function modifParcelle($idparcelle,$surface,$idthe){
    $base=dbconnect();
    $requete="update Parcelle set Surface='%o',id_The='%d' where id_Parcelle='%d'";
    $requete=sprintf($requete,$surface,$idthe,$idparcelle);
    $result=mysqli_query($base,$requete);
}
function insertCueilleur($nom,$genre,$dtn){
    $base=dbconnect();
    $requete="insert into Cueilleur values(null,'%s','%s','%s')";
    $requete=sprintf($requete,$nom,$genre,$dtn);
    $result=mysqli_query($base,$requete);
}
function modifCueilleur($idcueilleur,$nom,$genre,$dtn){
    $base=dbconnect();
    $requete="update Cueilleur set Nom_Cueilleur='%s',Genre='%s',Dtn='%s' where id_Cueilleur='%d'";
    $requete=sprintf($requete,$nom,$genre,$dtn,$idcueilleur);
    $result=mysqli_query($base,$requete);
}
function insertCueillette($idcueilleur,$idparcelle,$date,$poid){
    $base=dbconnect();
    $requete="insert into Cueillette values(null,'%d','%d','%s','%o')";
    $requete=sprintf($requete,$idcueilleur,$idparcelle,$date,$poid);
    $result=mysqli_query($base,$requete);
}
function modifCueillette($idcueillette,$idcueilleur,$idparcelle,$date,$poid){
    $base=dbconnect();
    $requete="update Cueillette set id_Cueilleur='%d',id_Parcelle='%d',Date_Ceuillette='%s',Poids_Cueilli='%o'
    where id_Cueilleur='%d'";
    $requete=sprintf($requete,$idcueilleur,$idparcelle,$date,$poid,$idcueillette);
    $result=mysqli_query($base,$requete);
}

function insertCateDepense($nom){
    $base=dbconnect();
    $requete="insert into CateDepense values(null,'%s')";
    $requete=sprintf($requete,$nom);
    $result=mysqli_query($base,$requete);
}
function modifCateDepense($idCateDepense,$nom){
    $base=dbconnect();
    $requete="update CateDepense set Nom_CateDepense='%s' where id_Cueilleur='%d'";
    $requete=sprintf($requete,$nom,$idCateDepense);
    $result=mysqli_query($base,$requete);
}
function insertMvtDepense($idCateDepense,$montat,$date){
    $base=dbconnect();
    $requete="insert into MvtDepense values(null,'%d','%o','%$')";
    $requete=sprintf($requete,$idCateDepense,$montat,$date);
    $result=mysqli_query($base,$requete);
}
function modifMvtDepense($iddepense,$idCateDepense,$montat,$date){
    $base=dbconnect();
    $requete="update MvtDepense set id_CateDepense='%d',Montant='%o',Date_Depense='%s' where id_Cueilleur='%d'";
    $requete=sprintf($requete,$idCateDepense,$montat,$date,$iddepense);
    $result=mysqli_query($base,$requete);
}
?>