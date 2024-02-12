<?php 
include "base.php";
function checklogin($identifiant,$motdepasse){
    $rep=false;
   // $mdp=sha1($motdepasse);
    $base=dbConnect();
    $result=mysqli_query($base,"select * from employes where Email='%o' and mdp='sha1(%o)'");
    sprintf($result,$identifiant,$motdepasse);
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
    $result=mysqli_query($base,"select * from employes where Email='%o' and mdp='sha1(%o)'");
    sprintf($result,$identifiant,$motdepasse);
     while($donnees=mysqli_fetch_assoc($result)){
         $rep=$donnees['id'];
     }  
    return $rep;
} 
function getinfo($id){
    $rep=array();
    $base=dbconnect();
    $result=mysqli_query($base,"select * from employes where id='%i'");
    sprintf($result,$id);
     while($donnees=mysqli_fetch_assoc($result)){
         $rep=$donnees;
     }  
    return $rep;
}
?>