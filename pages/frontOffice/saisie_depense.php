<div class="form-container">
    <h2 class="mb-4">Saisie dépense</h2>
    <form>
        <div class="mb-3">
            <label for="date_depense" class="form-label">Date dépense</label>
            <input type="date" class="form-control" id="date_depense" name="date_depense" required>
        </div>
        <div class="mb-3">
            <label for="depense" class="form-label">Catégorie dépense</label>
            <select name="depense" id="depense" class="form-control">
                <option value="0">Transport</option>
                <option value="1">Engrais</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="montant" class="form-label">Montant</label>
            <input type="number" id="montant" name="montant" required class="form-control" min="0">
        </div>
        <button type="submit" class="btn btn-success">Insérer</button>
    </form>
</div>
