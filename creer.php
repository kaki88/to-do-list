
<table class="right">
    <tr><td class="titre" colspan="2"><i class="fa fa-floppy-o" aria-hidden="true"></i> Nouvelle tâche</td></tr>

    <tr><td >&nbsp;</td></tr>

    <tr><td>
            <form action="add_task.php" method="GET">
                <input class="textbox" style="width:90%;" required type="text" placeholder="Nom de la tâche" name="task"></td></tr>
    <tr><td style="width:90%;">​<textarea class="textboxx"  required type="text" placeholder="Description" rows="3" name="description"></textarea></td></tr>
    <tr> <td><input class="textbox" style="width:90%;" required type="date" placeholder="Date limite" name="date"></td></tr>
    <tr> <td>
            <select class="textbox" style="width:90%;" name="cat" required>
                <option disabled selected value> -- Catégorie -- </option>
                <?php
                $categories = $mysqli->query('SELECT id,categorie FROM categories');
                while ($cat = $categories->fetch_object()) {
                   echo '<option value='.$cat->id.'>'.$cat->categorie.'</option>';
                }
                ?>

            </select>

        </td></tr>
    <tr> <td>
            <select class="textbox" style="width:90%;" name="priority" required>
                <option disabled selected value> -- Priorité -- </option>
                <option value="Urgent">Urgent</option>
                <option value="Forte">Forte</option>
                <option value="Moyenne">Moyenne</option>
                <option value="Faible">Faible</option>
                <option value="Osef">Osef</option>
            </select>
        </td></tr>

    <tr><td >&nbsp;</td></tr>
    <tr> <td class="valider" colspan="2"><input name="Valider" value="Enregistrer" type="submit" /></td></tr>
    </form>
</table>


