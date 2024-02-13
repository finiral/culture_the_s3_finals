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
function selectAll($table)
    {
        $base=dbConnect();
        $requete="select * from ".$table;
        $result=mysqli_query($base,$requete);
        $donnees=mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $donnees;
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
    $requete="insert into Parcelle values(null,'%d','%o')";
    $requete=sprintf($requete,$idthe,$surface);
    $result=mysqli_query($base,$requete);
}
function modifParcelle($idparcelle,$surface,$idthe){
    $base=dbconnect();
    $requete="update Parcelle set Surface_Parcelle='%o',id_The='%d' where id_Parcelle='%d'";
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
    $requete="insert into MvtDepense values(null,'%d','%d','%s')";
    $requete=sprintf($requete,$idCateDepense,$montat,$date);
    $result=mysqli_query($base,$requete);
}
function modifMvtDepense($iddepense,$idCateDepense,$montat,$date){
    $base=dbconnect();
    $requete="update MvtDepense set id_CateDepense='%d',Montant='%o',Date_Depense='%s' where id_Cueilleur='%d'";
    $requete=sprintf($requete,$idCateDepense,$montat,$date,$iddepense);
    $result=mysqli_query($base,$requete);
}
function insertMvtSalaire($montant,$date){
    $base=dbconnect();
    $requete="insert into MvtSalaire values(null,'%d','%s')";
    $requete=sprintf($requete,$montant,$date);
    $result=mysqli_query($base,$requete);
}
function modifMvtSalaire($idmvtsalaire,$montat,$date){
    $base=dbconnect();
    $requete="update MvtSalaire set Montant='%o',Date_Salaire='%s' where id_MvtSalaire='%d'";
    $requete=sprintf($requete,$montat,$date,$idmvtsalaire);
    $result=mysqli_query($base,$requete);
}
function getPoidtotal($date1,$date2){
    $rep=0;
    $base=dbconnect();
    $requete="select sum(Poids_Cueilli) as total from v_cueillette where Date_Cueillette>'%s' and Date_Cueillette<'%s'";
    $requete=sprintf($requete,$date1,$date2);
    $result=mysqli_query($base,$requete);
    if($donnees=mysqli_fetch_assoc($result)){
        $rep=$donnees['total'];
    }  
   return $rep;  
}
function getpoidrestant($date1,$date2){
    $requete="select id_Parcelle,restant,Date_Cueillette from v_rendeparcelle where Date_Cueillette>'%s' and Date_Cueillette<'%s'";
    $base=dbconnect();
    $requete=sprintf($requete,$date1,$date2);
    $result=mysqli_query($base,$requete);
    $rep=array();
    while($donnees=mysqli_fetch_assoc($result)){
        $rep[]=$donnees;
    }
    return $rep;
}
function insertcondition($minimal,$bonus,$malus,$date){
    $base=dbConnect();
    $requete="insert into cond values('%d','%d','%d','%s')";
    $requete=sprintf($requete,$minimal,$bonus,$malus,$date);
    $result=mysqli_query($base,$requete);
}
function getRestantParcelle($idparcelle,$date){
    $res=0;
    $base=dbConnect();
    $rendement=0;
    $requete="select rende_Parcelle from v_rendeparcelle where id_Parcelle='%d'";
    $requete=sprintf($requete,$idparcelle);
    $rep=mysqli_query($base,$requete);
    while($donnees=mysqli_fetch_assoc($rep)){
        $rendement=$donnees['rende_Parcelle'];
    }
    $requete="select id_Parcelle ,sum(Poids_Cueilli) as somme,Date_Cueillette from v_cueillette where Date_Cueillette<='%s' and id_Parcelle='%d' group by id_Parcelle";
    $requete=sprintf($requete,$date,$idparcelle);
    $totalCueillette=0;
    $rep=mysqli_query($base,$requete);
    while($donnees=mysqli_fetch_assoc($rep)){
        $totalCueillette=$donnees['somme'];
    }
    $res=$rendement-$totalCueillette;
    return $res;
}

function getCoutPerKg($dt1 , $dt2){
    $rep=0;
    $base=dbconnect();
    $requete="select sum(Montant)/(select sum(rende_Parcelle) from v_rendeparcelle where date_cueillette>='%s' && date_cueillette<='%s') as coutperkg from mvtdepense where date_depense>='%s' && date_depense<='%s';";
    $requete=sprintf($requete,$dt1,$dt2,$dt1,$dt2);
    $result=mysqli_query($base,$requete);
    if($donnees=mysqli_fetch_assoc($result)){
        $rep=$donnees['coutperkg'];
    }  
   return $rep;  
}
function insertregeneration($idmois,$date){
    $base=dbconnect();
    for($a=1;$a<=12;$a++){
        $is=false;
        for($i=0;$i<count($idmois);$i++){
            if($idmois[$i]==$a){
                $is=true;
                $requete="insert into saisonregen values(null,'%d',1,'%s')"; 
                $requete=sprintf($requete,$idmois[$i],$date);
                $result=mysqli_query($base,$requete);  
                break;      
            }          
        }
        if($is==false){
            $requete="insert into saisonregen values(null,'%d',0,'%s')"; 
            $requete=sprintf($requete,$a,$date);
            $result=mysqli_query($base,$requete);
        }

    }
}
function selectpayement($date1,$date2){
    $base=dbconnect();
    $requete="select * from v_payement where Date_Cueillette>%d and Date_Cueillette<%d";
    $requete=sprintf($requete,$date1,$date2);
    $result=mysqli_query($base,$requete);
    $donnees=mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $donnees;
}
function payement($date1,$date2){    
    $donnees=selectpayement($date1,$date2);
    $rep=array();
    for($i=0;$i<count($donnees);$i++){
        $payement=$donnees[$i]['Montant']*$donnees[$i]['Poids_Cueilli'];
        if($donnees[$i]['Poids_Cueilli']<$donnees[$i]['Minimal']){
            $payement=$payement-(($donnees[$i]['Montant']*$donnees[$i]['Malus'])/100);   
        }
        if($donnees[$i]['Poids_Cueilli']>$donnees[$i]['Minimal']){
            $payement=$payement+(($donnees[$i]['Montant']*$donnees[$i]['Bonus'])/100);   
        }
        $rep[$i]=$payement;
    }
    return $rep;
}
?>