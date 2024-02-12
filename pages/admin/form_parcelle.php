<div class="form-container">
    <h2 class="mb-4">Insertion parcelle</h2>
    <form>
        <div class="mb-3">
            <label for="numero" class="form-label">Numero parcelle</label>
            <input type="number" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="mb-3">
            <label for="surface" class="form-label">Surface (en hectar)</label>
            <input type="number" class="form-control" id="surface" name="surface" required>
        </div>
        <div class="mb-3">
            <label for="the" class="form-label">Variété de thé planté</label>
            
            <select class="form-control" id="the" name="the" required>
                <option value="">test</option>
                <option value="">test</option>
                <option value="">test</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Insérer</button>
    </form>
</div>