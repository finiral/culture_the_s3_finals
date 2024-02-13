<?php 
include "../../fonction/Fonction.php";
$table=null;
$montant=null;
if (isset($_GET['date_debut']) && isset($_GET['date_fin'])) {
    $datedebut=$_GET['date_debut'];
    $datefin=$_GET['date_fin'];
    $table=selectpayement($datedebut,$datefin);
    $montant=payement($datedebut,$datefin);
}
?>
<h2>Paiement pour les clients</h2>
<form method="GET" action="./user_model.php?nomPage=paiment_cueilleur.php">
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
                <?php foreach ($table[$i] as $key => $value) { ?>
                    <td scope="col"><?php echo $value ?></td>
                <?php } ?>
                
                <td scope="col"> <?php $montant[$i] ?></td>
            </tr>
         <?php }} ?>
            
        </tbody>
    </table>
</div>