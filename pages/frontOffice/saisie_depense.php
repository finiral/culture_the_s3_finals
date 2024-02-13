<?php
include "../../fonction/Fonction.php";
$cate = selectAll("CateDepense");

?>
<div class="form-container">
    <h2 class="mb-4">Saisie dépense</h2>
    <form method="GET" action="insert_depense.php"> 
        <div class="mb-3">
            <label for="date_depense" class="form-label">Date dépense</label>
            <input type="date" class="form-control" id="date_depense" name="date_depense" required>
        </div>
        <div class="mb-3">
            <label for="depense" class="form-label">Catégorie dépense</label>
            <select name="depense" id="depense" class="form-control">
                <?php
                for ($i = 0; $i < count($cate); $i++) {
                ?>
                    <option value="<?php echo $cate[$i]["id_CateDepense"]; ?>"><?php echo $cate[$i]["Nom_CateDepense"]; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="montant" class="form-label">Montant</label>
            <input type="number" id="montant" name="montant" required class="form-control" min="0">
        </div>
        <button type="submit" class="btn btn-success">Insérer</button>
    </form>
</div>