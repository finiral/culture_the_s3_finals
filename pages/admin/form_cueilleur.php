<div class="form-container">
    <h2 class="mb-4">Insertion cueilleur</h2>
    <form method="get" action="trait_insertion_cueilleur.php">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom cueilleur</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select name="genre" id="genre" class="form-control">
                <option value="M">Male</option>
                <option value="F">Femelle</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="dtn" class="form-label">Date de naissance</label>
            <input type="date" id="dtn" name="dtn" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Insérer</button>
    </form>
</div>