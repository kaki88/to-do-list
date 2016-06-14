<table class="center">
    <tr>
        <td colspan=5 class="titre"><i class="fa fa-tasks" aria-hidden="true"></i> Tâches terminées</td>
    </tr>

    <tr class="desctable">
        <td width=20%>Objet</td>
        <td width=20%>Catégorie</td>
        <td width=20%>Priorité</td>
        <td width=20%>Date limite</td>
        <td colspan="2">Action</td>
    </tr>
    <?php



        $tasklist = $mysqli->query('SELECT * ,DATE_FORMAT(t.date, "%d/%m/%Y") AS formatted_date, t.id as lid
FROM corbeille t 
JOIN categories c
ON t.id_categories = c.id
ORDER BY DATE asc, etat DESC');
        while ($list = $tasklist->fetch_object()) {
            echo '<tr><td width=30% class="tooltip" onmouseover="tooltip.pop(this, \'' . $list->description . '\')" >' . $list->titre . '</td><td width=20% >' . $list->categorie . '</td><td width=20%>' . $list->etat . '</td><td width=20%>' . $list->formatted_date . '</td><td><a href="restaurer.php?id=' . $list->lid . '"><i class="fa fa-sign-out" aria-hidden="true"></i></a><a href="delete.php?id=' . $list->lid . '"><i class="fa fa-times-circle red" aria-hidden="true"></i></a></td></tr>';
        }

    ?>

</table>
