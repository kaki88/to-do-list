<?php
include('config.php');


$cat = $_REQUEST['titrecat'];


    $sql = "INSERT INTO 
      categories(categorie) 
      VALUES ('$cat')";

    $query = $mysqli->query($sql);

if (!$query) {
    echo "Erreur lors de la requête : $mysqli->error";
    exit();
}

header('Location: index.php');
exit();


