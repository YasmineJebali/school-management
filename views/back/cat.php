<?php 
    require_once '../../controller/TypeC.php';
    require_once '../../models/Type.php';

    $tp1= new TypeC();
    $liste=$tp1->afficherType();


  $tp2= new TypeC();
  if(!isset($_POST['str'])){
      $liste = $tp2->afficherType();  
  }
  else{
      $liste = $tp2->rechercherType($_POST['str']);
  }

  foreach ($liste as $t) {
    ?>
    <tr>
    <th scope="row">  <?php echo $t['id'] ?>  </th>
    <td>  <?php echo $t['nom_categorie'] ?>  </td>

    <td>
      <a href="modifierCat.php?id=<?php echo $t['id']?>"> Modifier </a>
    </td>
    <td>
      <a href="displayCat.php?id=<?php echo $t['id'] ?>"> Supprimer </a>
    </td>
    </tr>
    <?php
}

?>
