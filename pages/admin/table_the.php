<?php
include "../../fonction/Fonction.php";
$table=selectAll("the");

?>
<br>
<h2>Liste variété</h2>
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Occupation</th>
        <th scope="col">Rendement</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i=0; $i <count($table) ; $i++) { ?> 
        <tr>
          <?php foreach ($table[$i] as $key => $value) { ?>
          <?php if ($key=="id_The") {
            $id=$value;
          } else { ?>
          <td scope="col"><?php echo $value ?></td>
          <?php }} ?>
        <td scope="col"><a href="./trait_modif.php?idthe=<?php echo $id."&table=the"?>">Edit</a></td>
        <td scope="col"><a href="./trait_delete.php?idthe=<?php echo $id."&table=the"?>">Delete</a></td>
       </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>