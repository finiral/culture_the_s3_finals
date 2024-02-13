<?php
include "../../fonction/Fonction.php";
$poidtotal = 0;
$cout = 0;
$parc = array();
if (isset($_GET["dt1"]) && isset($_GET["dt2"])) {
    $poidtotal = getPoidtotal($_GET["dt1"], $_GET["dt2"]);
    $parc = getpoidrestant($_GET["dt1"], $_GET["dt2"]);
    $cout = getCoutPerKg($_GET["dt1"], $_GET["dt2"]);
}
?>
<div class="form-container">
    <h2 class="mb-4">Résultats globals</h2>
    <form method="GET" action="result_datas.php">
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
    <!-- POIDS TOTAL CUEILLETTE -->
    <br>
    <h2>Poids total Cueillette</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="col">Poids total</th>
                <th scope="col"><?php echo $poidtotal; ?> kg</th>

            </tr>
        </table>
    </div>
    <h2>Poids restant sur les parcelles</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Numero parcelle</th>
                    <th scope="col">Poids restant</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($parc); $i++) { ?>

                    <tr>
                        <td scope="col"><?php echo $parc[$i]["id_Parcelle"]; ?></td>
                        <td scope="col"><?php echo $parc[$i]["restant"]; ?></td>
                        <td scope="col"><?php echo $parc[$i]["Date_Cueillette"]; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <h2>Cout de revient / kg</h2>
    <table class="table table-striped">
        <tr>
            <th scope="col">Cout / kg</th>
            <th scope="col"><?php echo $cout; ?> kg</th>
        </tr>
    </table>
    <h2>Montant des ventes</h2>
    <table class="table table-striped">
        <tr>
            <th scope="col">Ventes</th>
            <th scope="col"><?php echo $cout; ?> </th>
        </tr>
    </table>
    <h2>Montant des dépenses</h2>
    <table class="table table-striped">
        <tr>
            <th scope="col">Dépenses</th>
            <th scope="col"><?php echo $cout; ?> </th>
        </tr>
    </table>
    <h2>Bénéfice</h2>
    <table class="table table-striped">
        <tr>
            <th scope="col">Bénefices</th>
            <th scope="col"><?php echo $cout; ?> </th>
        </tr>
    </table>
</div>