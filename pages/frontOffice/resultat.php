<div class="form-container">
    <h2 class="mb-4">Résultats globals</h2>
    <form>
        <div class="mb-3">
            <label for="date_debut" class="form-label">Date de début</label>
            <input type="date" class="form-control" id="date_debut" name="date_depense" required>
        </div>

        <div class="mb-3">
            <label for="date_fin" class="form-label">Date de fin</label>
            <input type="date" class="form-control" id="date_fin" name="date_depense" required>
        </div>
        <button type="submit" class="btn btn-success">Confirmer</button>
    </form>
    <!-- POIDS TOTAL CUEILLETTE -->
    <br>
    <h2>Poids total Cueillette</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cueilleur</th>
                    <th scope="col">Parcelle</th>
                    <th scope="col">Date cueillette</th>
                    <th scope="col">Poids cueilli</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">Test</td>
                    <td scope="col">Test</td>
                    <td scope="col">Test</td>
                    <td scope="col">Test</td>
                </tr>
            </tbody>
            <tr>
                <th scope="col">Poids total</th>
                <th scope="col">900 kg</th>

            </tr>
        </table>
    </div>
    <h2>Poids restant sur les parcelles</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Numero parcelle</th>
                    <th scope="col">Poids cultivé</th>
                    <th scope="col">Poids cueilli</th>
                    <th scope="col">Poids restant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">Test</td>
                    <td scope="col">Test</td>
                    <td scope="col">Test</td>
                    <td scope="col">Test</td>
                </tr>
            </tbody>
            <tr>
                <th scope="col">Poids total restant</th>
                <th scope="col">500 kg</th>
            </tr>
        </table>
    </div>
    <h2>Cout de revient / kg</h2>

</div>