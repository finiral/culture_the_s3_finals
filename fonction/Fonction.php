<?php 
include "base.php";
function checklogin($identifiant,$motdepasse){
    $rep=false;
   // $mdp=sha1($motdepasse);
    $base=dbConnect();
    $requete="select * from employes where Email='%s' and mdp='sha1(%s)'";
    sprintf($requete,$identifiant,$motdepasse);
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
function getuser($identifiant,$motdepasse){
    $base=dbconnect();
    $requete="select * from employes where Email='%s' and mdp='sha1(%s)'";
    sprintf($requete,$identifiant,$motdepasse);
    $result=mysqli_query($base,$requete);
     while($donnees=mysqli_fetch_assoc($result)){
         $rep=$donnees['id'];
     }  
    return $rep;
} 
function getinfo($id,$table){
    $rep=array();
    $base=dbconnect();
    $requete="select * from %s where id_%s='%i'";
    sprintf($requete,$table,$table,$id);
    $result=mysqli_query($base,$requete);
     while($donnees=mysqli_fetch_assoc($result)){
         $rep=$donnees;
     }  
    return $rep;
}
function insertvariete($nom,$occupation,$rendement){
    $base=dbconnect();
    $requete="insert into The values(null,'%s','%o','%o')";
    sprintf($requete,$nom,$occupation,$rendement);
    $result=mysqli_query($base,);
}
function modifvariete($idthe,$nom,$occupation,$rendement){
    $base=dbconnect();
    $requete="update The set Nom_the='%s',Occup;ation='%o',Rendement='%o' where id_The='%i'";
    sprintf($requete,$nom,$occupation,$rendement,$id);
    $result=mysqli_query($base,$requete);
}
function supprimer($id,$table){
    $base=dbconnect();
    $requete="delete from %s where id_%s='%i'";
    sprintf($requete,$table,$table,$id);
        $result=mysqli_query($base,$requete)
}
function insertParcelle($surface,$idthe){
    $base=dbconnect();
    $requete="insert into Parcelle values(null,'%o','%i')";
    sprintf($requete,$surface,$idthe);
    $result=mysqli_query($base,$requete)
}
function modifParcelle($idparcelle,$surface,$idthe){
    $base=dbconnect();
    $requete="update Parcelle set Surface='%o',id_The='%i' where id_Parcelle='%i'";
    sprintf($requete,$surface,$idthe,$idparcelle);
    $result=mysqli_query($base,$requete);
}
function insertCueilleur($nom,$genre,$dtn){
    $base=dbconnect();
    $requete="insert into Cueilleur values(null,'%s','%s','%s')";
    sprintf($requete,$nom,$genre,$dtn);
    $result=mysqli_query($base,$requete)
}
function modifCueilleur($idcueilleur,$nom,$genre,$dtn){
    $base=dbconnect();
    $requete="update Cueilleur set Nom_Cueilleur='%s',Genre='%s',Dtn='%s' where id_Cueilleur='%i'";
    sprintf($requete,$nom,$genre,$dtn,$idcueilleur);
    $result=mysqli_query($base,$requete);
}
function insertCueillette($idcueilleur,$idparcelle,$date,$poid){
    $base=dbconnect();
    $requete="insert into Cueillette values(null,'%i','%i','%s','%o')";
    sprintf($requete,$idcueilleur,$idparcelle,$date,$poid);
    $result=mysqli_query($base,$requete)
}
function modifCueillette($idcueillette,$idcueilleur,$idparcelle,$date,$poid){
    $base=dbconnect();
    $requete="update Cueillette set id_Cueilleur='%i',id_Parcelle='%i',Date_Ceuillette='%s',Poids_Cueilli='%o'
    where id_Cueilleur='%i'";
    sprintf($requete,$idcueilleur,$idparcelle,$date,$poid,$idcueillette);
    $result=mysqli_query($base,$requete);
}

function insertCateDepense($nom){
    $base=dbconnect();
    $requete="insert into CateDepense values(null,'%s')";
    sprintf($requete,$nom);
    $result=mysqli_query($base,$requete)
}
function modifCateDepense($idCateDepense,$nom){
    $base=dbconnect();
    $requete="update CateDepense set Nom_CateDepense='%s' where id_Cueilleur='%i'";
    sprintf($requete,$nom,$idCateDepense);
    $result=mysqli_query($base,$requete);
}
function insertMvtDepense($idCateDepense,$montat,$date){
    $base=dbconnect();
    $requete="insert into MvtDepense values(null,'%i','%o','%$')";
    sprintf($requete,$idCateDepense,$montat,$date);
    $result=mysqli_query($base,$requete)
}
function modifMvtDepense($iddepense,$idCateDepense,$montat,$date){
    $base=dbconnect();
    $requete="update MvtDepense set id_CateDepense='%i',Montant='%o',Date_Depense='%s' where id_Cueilleur='%i'";
    sprintf($requete,$idCateDepense,$montat,$date,$iddepense);
    $result=mysqli_query($base,$requete);
}
?>