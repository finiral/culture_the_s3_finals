<?php 
include "../../fonction/Fonction.php";
$table=selectAll("catedepense");

?>
<br>
<h2>Liste catégorie dépense</h2>
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Nom catégorie dépense</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <?php for ($i=0; $i <count($table) ; $i++) { ?> 
        <tr>
          <?php foreach ($table[$i] as $key => $value) { ?>
          <?php if ($key=="id_CateDepense") {  $id=$value; ?>  
          <?php } else { ?>
          <td scope="col"><?php echo $value ?></td>
          <?php }} ?>
        <td scope="col"><a href="./trait_modif.php?id=<?php echo $id."&table=catedepense"?>">Edit</a></td>
        <td scope="col"><a href="./trait_delete.php?id=<?php echo $id."&table=catedepense"?>">Delete</a></td>
       </tr>
      <?php } ?>
      </tr>
    </tbody>
  </table>
</div>