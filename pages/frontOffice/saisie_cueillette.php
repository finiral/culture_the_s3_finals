<?php
include "../../fonction/Fonction.php";
$cueilleur = selectAll("Cueilleur");
$parcelle = selectAll("Parcelle");
?>
<div class="form-container">
    <h2 class="mb-4">Saisie cueillette</h2>
    <form id="myform">
        <div class="mb-3">
            <label for="date_cueil" class="form-label">Date cueillette</label>
            <input type="date" class="form-control" id="date_cueil" name="date_cueil" required>
        </div>
        <div class="mb-3">
            <label for="cueilleur" class="form-label">Choix cueilleur</label>
            <select name="cueilleur" id="cueilleur" class="form-control">
                <?php
                for ($i = 0; $i < count($cueilleur); $i++) {
                ?>
                    <option value="<?php echo $cueilleur[$i]["id_Cueilleur"]; ?>"><?php echo $cueilleur[$i]["Nom_Cueilleur"]; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="parcelle" class="form-label">Choix parcelle</label>
            <select name="parcelle" id="parcelle" class="form-control">
                <?php
                for ($i = 0; $i < count($parcelle); $i++) {
                ?>
                    <option value="<?php echo $parcelle[$i]["id_Parcelle"]; ?>">Numéro <?php echo $parcelle[$i]["id_Parcelle"]; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="poids_cueilli" class="form-label">Poids cueilli</label>
            <input type="number" id="poids_cueilli" name="poids_cueilli" required class="form-control" min="0">
        </div>
        <button type="submit" class="btn btn-success">Insérer</button>
    </form>
</div>

<script type="text/javascript">
    //Les codes ci dessous sont executé lorsque la page est chargée
    window.addEventListener("load", function() {

        // Accédez à l'élément form publication …
        var form = document.getElementById("myform");

        // … et prenez en charge l'événement submit.
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // évite de faire le submit par défaut
            sendData();
        });

        function sendData() {
            ///create the xhr
            var xhr;
            try {
                xhr = new ActiveXObject('Msxml2.XMLHTTP');
            } catch (e) {
                try {
                    xhr = new ActiveXObject('Microsoft.XMLHTTP');
                } catch (e2) {
                    try {
                        xhr = new XMLHttpRequest();
                    } catch (e3) {
                        xhr = false;
                    }
                }
            }


            // Liez l'objet FormData et l'élément form
            var formData = new FormData(form);


            // Configurez la requête
            xhr.open("POST", "verif_cueilli.php");

            // Les données envoyées sont ce que l'utilisateur a mis dans le formulaire
            xhr.send(formData);


            //traitement
            // Definissez ce qui se passe en cas d'erreur
            xhr.addEventListener("error", function(event) {
                alert('Oups! Quelque chose s\'est mal passé.');
            });


            ///en cas de success
            xhr.addEventListener("load", function(event) {
                if (xhr.responseText == "ok") {
                    alert("Insertion réussie !");
                } else {
                    alert("Montant cueilli trop élevé.")
                }
            })
        }
    });
</script>