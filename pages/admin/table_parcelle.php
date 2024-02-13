<?php 
include "../../fonction/Fonction.php";
$table=selectAll("parcelle");

?>
<br>
<h2>Liste parcelle</h2>
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Numéro parcelle</th>
        <th scope="col">Variété de thé</th>
        <th scope="col">Surface</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
    <?php for ($i=0; $i <count($table) ; $i++) { ?> 
        <tr>
          <?php foreach ($table[$i] as $key => $value) { ?>
          <?php if ($key=="id_Parcelle") {  $id=$value; ?>  
            
            <td scope="col"><?php echo $value ?></td>
          <?php } else { ?>
          <td scope="col"><?php echo $value ?></td>
          <?php }} ?>
        <td scope="col"><a href="./trait_modif.php?id=<?php echo $id."&table=Parcelle"?>">Edit</a></td>
        <td scope="col"><a href="./trait_delete.php?id=<?php echo $id."&table=Parcelle"?>">Delete</a></td>
       </tr>
      <?php } ?>
    </tbody>
  </table>
</div>