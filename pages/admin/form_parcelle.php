<?php 
$table=selectAll("the");
?>
<div class="form-container">
    <h2 class="mb-4">Insertion parcelle</h2>
    <form method="get" action="trait_insertion_parcelle.php">
        <div class="mb-3">
            <label for="surface" class="form-label">Surface (en hectar)</label>
            <input type="number" class="form-control" id="surface" name="surface" required>
        </div>
        <div class="mb-3">
            <label for="the" class="form-label">Variété de thé planté</label>
            
            <select class="form-control" id="the" name="the" required>
             <?php for ($i=0; $i <count($table) ; $i++) { ?>
                <option value="<?php echo $table[$i]['id_The'] ?>"><?php echo $table[$i]['Nom_The'] ?></option>              
                <?php } ?>   
              
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Insérer</button>
    </form>
</div>