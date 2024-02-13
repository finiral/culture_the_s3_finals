<div class="form-container">
    <h2 class="mb-4">Insertion montant/kg</h2>
    <form method="get" action="trait_insertion_montant.php">
        <div class="mb-3">
            <label for="montant" class="form-label">Montant/kg des cueilleurs</label>
            <input type="number" class="form-control" id="montant" name="montant" required>
        </div>
        <div class="mb-3">
            <label for="montant" class="form-label">date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Insérer</button>
    </form>
</div>