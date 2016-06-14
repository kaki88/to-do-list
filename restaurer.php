<?php
include('config.php');

$id = $_GET['id'];


$sql = "INSERT INTO taches SELECT * FROM corbeille where id='$id'";
$sqll = "DELETE FROM corbeille where id='$id'";





$query = $mysqli->query($sql);
$querry = $mysqli->query($sqll);
if (!$query) {
    echo "Erreur lors de la requête : $mysqli->error";
    exit();
}

header('Location: index.php?trashbin=view');
exit();
