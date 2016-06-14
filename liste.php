<table class="center">
    <tr>
        <td colspan=5 class="titre"><i class="fa fa-tasks" aria-hidden="true"></i> Tâches en cours</td>
    </tr>

    <tr class="desctable">
        <td width=20%>Objet</td>
        <td width=20%>Catégorie</td>
        <td width=20%>Priorité</td>
        <td width=20%>Date limite</td>
        <td colspan="2">Action</td>
    </tr>

    <?php
    if (isset($_GET['cat'])) {
        $categ = $_GET['cat'];
        $tasklist = $mysqli->query("
SELECT * ,DATE_FORMAT(t.date, \"%d %M %Y\") AS formatted_date
, t.id as lid
 FROM taches t 
JOIN categories c
ON t.id_categories = c.id
where id_categories = '$categ' ORDER BY DATE, etat DESC ");
        while ($list = $tasklist->fetch_object()) {
            echo '<tr><td width=30% class="tooltip" onmouseover="tooltip.pop(this, `' . $list->description . '`)" >' . $list->titre . '</td><td width=20% >' . $list->categorie . '</td><td class="' . $list->etat . '" width=20%>' . $list->etat . '</td><td width=20%>' . $list->formatted_date . '</td><td><a href="index.php?cat=' . $categ . '&id=' . $list->lid . '"><i class="fa fa-pencil-square-o"></i></a><a href="totrashbin.php?id=' . $list->lid . '"><i class="fa fa-trash red" aria-hidden="true"></i></a></td></tr>';
        }
    } else {
        $tasklist = $mysqli->query('
SELECT * ,DATE_FORMAT(t.date, "%d %M %Y") AS formatted_date, t.id as lid
FROM taches t 
JOIN categories c
ON t.id_categories = c.id
ORDER BY DATE asc, etat DESC');
        while ($list = $tasklist->fetch_object()) {
            echo '<tr><td width=30% class="tooltip" onmouseover="tooltip.pop(this, `' . $list->description . '`)" >' . $list->titre . '</td><td width=20% >' . $list->categorie . '</td><td class="' . $list->etat . '" width=20%>' . $list->etat . '</td><td width=20%>' . $list->formatted_date . '</td><td><a href="index.php?id=' . $list->lid . '"><i class="fa fa-pencil-square-o"></i></a><a href="totrashbin.php?id=' . $list->lid . '"><i class="fa fa-trash red " aria-hidden="true"></i></a></td></tr>';
        }
    }
    ?>
</table>
<script>
    function couleur (){
        var u = document.getElementsByClassName("Urgent");
        var f = document.getElementsByClassName("Forte");
        var m = document.getElementsByClassName("Moyenne");
        var fa = document.getElementsByClassName("Faible");
        var o = document.getElementsByClassName("Osef");
        var i;
        for (i = 0; i < u.length; i++) {
            u[i].style.color = "red";
        }
        for (i = 0; i < f.length; i++) {
            f[i].style.color = "orange";
        }
        for (i = 0; i < m.length; i++) {
            m[i].style.color = "yellow";
        }
        for (i = 0; i < fa.length; i++) {
            fa[i].style.color = "green";
        }
        for (i = 0; i < o.length; i++) {
            o[i].style.color = "grey";
        }
    }
</script>