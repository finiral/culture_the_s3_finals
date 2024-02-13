<br>
<div class="form-container">
    <h2 class="mb-4">Régeneration de thé</h2>
    <form method="get" action="trait_insertion_saison.php">
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Janvier</label>
            <input name="mois[]" type="checkbox" value="1" class="form-check-input">
            <label class="form-label">Février</label>
            <input name="mois[]" type="checkbox" value="2" class="form-check-input">
            <label class="form-label">Mars</label>
            <input name="mois[]" type="checkbox" value="3" class="form-check-input">
            <label class="form-label">Avril</label>
            <input name="mois[]" type="checkbox" value="4" class="form-check-input">
        </div>
        <div class="mb-3">
            <label class="form-label">Mai</label>
            <input name="mois[]" type="checkbox" value="5" class="form-check-input">
            <label class="form-label">Juin</label>
            <input name="mois[]" type="checkbox" value="6" class="form-check-input">
            <label class="form-label">Juillet</label>
            <input name="mois[]" type="checkbox" value="7" class="form-check-input">
            <label class="form-label">Aout</label>
            <input name="mois[]" type="checkbox" value="8" class="form-check-input">
        </div>
        <div class="mb-3">
            <label class="form-label">Septembre</label>
            <input name="mois[]" type="checkbox" value="9" class="form-check-input">
            <label class="form-label">Octobre</label>
            <input name="mois[]" type="checkbox" value="10" class="form-check-input">
            <label class="form-label">Novembre</label>
            <input name="mois[]" type="checkbox" value="11" class="form-check-input">
            <label class="form-label">Décembre</label>
            <input name="mois[]" type="checkbox" value="12" class="form-check-input">
        </div>

        <button type="submit" class="btn btn-primary">Sauvegarder</button>
    </form>
</div>
<br>
<div class="form-container">
    <h2 class="mb-4">Journalier</h2>
    <form method="get" action="trait_insertion_journalier.php">
        <div class="mb-3">
            <div class="mb-3">
                <label for="poidsmin" class="form-label">Poids minimal journalier</label>
                <input type="number" class="form-control" id="poidsmin" name="poidsmin" required>
            </div>
            <div class="mb-3">
                <label for="prctgbon" class="form-label">Pourcentage bonus</label>
                <input type="number" class="form-control" id="prctgbon" name="prctgbon" required>
            </div>
            <div class="mb-3">
                <label for="prctgmal" class="form-label">Pourcentage malus</label>
                <input type="number" class="form-control" id="prctgmal" name="prctgmal" required>
            </div>
            <div class="mb-3">
                <label for="montant" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Sauvegarder</button>
    </form>
</div>
<br>