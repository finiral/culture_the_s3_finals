<?php 
Function checklogin($identifiant,$motdepasse){
    $rep=false;
   // $mdp=sha1($motdepasse);
    $base=mysqli_connect("localhost","root","","vusalaire");
    $result=mysqli_query($base,"select * from employes where Email='$identifiant' and sha1(mdp)='$motdepasse'");
    $isa=mysqli_num_rows($result);
    // while($donnees=mysqli_fetch_assoc($result)){
    //     $retour[]=$donnees;
    // }  
    if($isa==1){
        $rep=true;
    }
    else{
        $rep=false;
    }
    return $rep;
}
Function getuser($identifiant,$motdepasse){
    $rep="ok";
    //$mdp=sha1($motdepasse);
    $base=mysqli_connect("localhost","root","","vusalaire");
    $retour=array();
    $result=mysqli_query($base,"select id from employes where Email='$identifiant' and mdp='$motdepasse'");
     while($donnees=mysqli_fetch_assoc($result)){
         $rep=$donnees['id'];
     }  
    return $rep;
} 
Function getinfo($id){
    $rep=array();
    $base=mysqli_connect("localhost","root","","vusalaire");
    $result=mysqli_query($base,"select * from employes where id='$id'");
     while($donnees=mysqli_fetch_assoc($result)){
         $rep=$donnees;
     }  
    return $rep;
} 
function calculerNombreJoursOuvrables($id) {
    // Convertir la date en objet DateTime
    $date = new DateTime(getinfo($id)['date_embauche']);

    // Obtenir la date actuelle
    $dateActuelle = new DateTime();

    // Initialiser le compteur de jours ouvrables
    $nombreJoursOuvrables = 0;

    // Itérer sur chaque jour entre les deux dates
    while ($date <= $dateActuelle) {
        // Vérifier si le jour en cours n'est pas un week-end (samedi ou dimanche)
        if ($date->format('N') < 6) {
            $nombreJoursOuvrables++;
        }

        // Passer au jour suivant
        $date->modify('+1 day');
    }

    // Renvoyer le nombre de jours ouvrables
    return $nombreJoursOuvrables;
}
Function  calculSalaire($id){
    $jour=calculerNombreJoursOuvrables($id);
    $taux=getinfo($id)['taux_journalier'];
    $salaire=$taux*$jour;
    return $salaire;
}
?>