<?php 
include "../../fonction/Fonction.php";
$table=null;
$montant=null;
if (isset($_GET['dt1']) && isset($_GET['dt2'])) {
    $datedebut=$_GET['dt1'];
    $datefin=$_GET['dt2'];
    $table=selectpayement($datedebut,$datefin);
    $montant=payement($datedebut,$datefin);
}
?>
<h2>Paiement pour les clients</h2>
<form method="GET" action="./result_paie.php">
        <div class="mb-3">
            <label for="date_debut" class="form-label">Date de début</label>
            <input type="date" class="form-control" id="date_debut" name="date_debut" required>
        </div>

        <div class="mb-3">
            <label for="date_fin" class="form-label">Date de fin</label>
            <input type="date" class="form-control" id="date_fin" name="date_fin" required>
        </div>
        <button type="submit" class="btn btn-success">Confirmer</button>
    </form>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Nom cueilleur</th>
                <th scope="col">Poids</th>
                <th scope="col">Bonus</th>
                <th scope="col">Malus</th>
                <th scope="col">Montant paiement</th>
            </tr>
        </thead>
        <tbody>
          <?php if ($table!=null && $montant!=null) { ?>
            <?php for ($i=0; $i <count($table) ; $i++) { ?>
            <tr>
                <?php foreach ($table[$i] as $key => $value) { 
                    if($key!="Minimal" && $key!="Montant"){
                    ?>
                    <td scope="col"><?php echo $value ?></td>
                <?php } }?>
                
                <td scope="col"> <?php echo $montant[$i] ?></td>
            </tr>
         <?php }} ?>
            
        </tbody>
    </table>
</div>