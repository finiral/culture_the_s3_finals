<h2>Paiement pour les clients</h2>
<form method="GET" action="">
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
            <tr>
                <td scope="col">Test</td>
                <td scope="col">Test</td>
                <td scope="col">Test</td>
                <td scope="col">Test</td>
                <td scope="col">Test</td>
                <td scope="col">Test</td>
            </tr>
        </tbody>
    </table>
</div>