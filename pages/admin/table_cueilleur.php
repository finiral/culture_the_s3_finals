<?php 
include "../../fonction/Fonction.php";
$table=selectAll("cueilleur");
?>
<br>
<h2>Liste cueilleur</h2>
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Nom cueilleur</th>
        <th scope="col">Genre</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
    <?php for ($i=0; $i <count($table) ; $i++) { ?> 
        <tr>
          <?php foreach ($table[$i] as $key => $value) { ?>
          <?php if ($key=="id_Cueilleur") {  $id=$value; ?>  
          <?php } else { ?>
          <td scope="col"><?php echo $value ?></td>
          <?php }} ?>
        <td scope="col"><a href="./trait_modif.php?id=<?php echo $id."&table=cueilleur"?>">Edit</a></td>
        <td scope="col"><a href="./trait_delete.php?id=<?php echo $id."&table=cueilleur"?>">Delete</a></td>
       </tr>
      <?php } ?>
    </tbody>
  </table>
</div>