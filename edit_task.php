<?php
include('config.php');


$task = $_REQUEST['task'];
$date = $_REQUEST['date'];
$cat = $_REQUEST['cat'];
$priority = $_REQUEST['priority'];
$id = $_GET['id'];
$descr = $_REQUEST['description'];


$sql = "UPDATE taches
SET titre = '$task',
date = '$date',
id_categories = '$cat',
description = '".addslashes($descr)."',
etat = '$priority'
WHERE id = '$id'
";

$query = $mysqli->query($sql);

if (!$query) {
    echo "Erreur lors de la requête : $mysqli->error";
    exit();
}

header('Location: index.php');
exit();
