<?php
$link = mysqli_connect("localhost", "root", "", "growgreen");
$id=$_GET['id'];
$nom_categorie=$_GET['nom_categorie']; 


echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE categorie SET nom_categorie='$nom_categorie' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:displayCat.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 