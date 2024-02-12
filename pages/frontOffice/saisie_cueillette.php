<div class="form-container">
    <h2 class="mb-4">Saisie cueillette</h2>
    <form>
        <div class="mb-3">
            <label for="date_cueil" class="form-label">Date cueillette</label>
            <input type="date" class="form-control" id="date_cueil" name="date_cueil" required>
        </div>
        <div class="mb-3">
            <label for="cueilleur" class="form-label">Choix cueilleur</label>
            <select name="cueilleur" id="cueilleur" class="form-control">
                <option value="0">Betrond</option>
                <option value="1">Betrine</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="parcelle" class="form-label">Choix parcelle</label>
            <select name="parcelle" id="parcelle" class="form-control">
                <option value="0">Numero 23</option>
                <option value="1">Numero 24</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="poids_cueilli" class="form-label">Poids cueilli</label>
            <input type="number" id="poids_cueilli" name="poids_cueilli" required class="form-control" min="0">
        </div>
        <button type="submit" class="btn btn-success">Insérer</button>
    </form>
</div>
