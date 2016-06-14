<?php
$countalle = $mysqli->query('
SELECT 
COUNT(*) as countall 
FROM taches');
$countall = $countalle->fetch_object();

?>


<table class="left">
<tr><td id="cat" class="titre" colspan="2" onclick="cacher();"><i class="fa fa-bars" aria-hidden="true"></i> Catégories <i class="fa fa-plus-circle plusss" aria-hidden="true"></i></td></tr>
    <tr><td >&nbsp;</td></tr>
    <tr><td class=""><a href="index.php"><span class="dossier"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Toutes</span></a></td><td class="compteur"><span class="count"><?= $countall->countall ?></span></td></tr>
    <tr><td >
    <?php
    $categories = $mysqli->query('
SELECT c.id, c.categorie, 
COUNT(t.id_categories) as count 
FROM categories c 
LEFT JOIN taches t 
ON c.id = t.id_categories 
GROUP BY c.categorie
ORDER BY count DESC');

    while ($cat = $categories->fetch_object()) {
        echo '<tr><td height="30px"><a href="index.php?cat='.$cat->id.'"><span class="dossier"><i class="fa fa-folder-o" aria-hidden="true"></i> '.$cat->categorie.'</span></a></td><td class="compteur"><span class="count">'.$cat->count.'</span></td></tr>';
    }
    ?>
            </td></tr><tr><td>&nbsp;</td></tr></table><table id="addcat" class="leftcat cacher">
    <tr><td class="titre" colspan="2">
<form action="add_cat.php" method="GET">
    Créer une catégorie </td></tr>
    <tr> <td colspan="2"><input style="width:75%;" required type="text" placeholder="" name="titrecat">&nbsp;<input name="Valider" value="OK" type="submit" /></td></tr>
</form>
</table>


<?php
$result = $mysqli->query("SELECT COUNT(*) FROM corbeille");
$row_cnt = mysqli_fetch_row($result);
?>


<div class="trash" onclick="location.href='index.php?trashbin=view';">
    <img class="trash-img" src="img/trash.png">
    <div class="counttrash"><?= $row_cnt[0]; ?> Tâches terminées</div>
</div>

