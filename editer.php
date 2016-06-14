<?php
include('config.php');
$id = $_GET["id"];
$sql = $mysqli->query("SELECT * FROM taches where id = '$id'")->fetch_object();
?>

<table class="right">
    <tr>
        <td class="titre" colspan="2">Modifier une tâche</td>
    </tr>

    <tr>
        <td>&nbsp;</td>
    </tr>

    <tr>
        <td>
            <form action="edit_task.php" method="GET">
                <input class="textbox" style="width:90%;" required type="text" placeholder="" name="task"
                       value="<?php echo $sql->titre; ?>">
    <tr>
        <td style="width:90%;">​<textarea class="textboxx" required type="text" placeholder="Description" rows="3"
                                          name="description"><?php echo $sql->description; ?> </textarea></td>
    </tr>


    </td></tr>
    <tr>
        <td><input class="textbox" style="width:90%;" required type="date" placeholder="" name="date"
                   value="<?php echo $sql->date; ?>"></td>
    </tr>
    <tr>
        <td>


            <select class="textbox" style="width:90%;" name="cat" required>
                <?php
                $categories = $mysqli->query('SELECT id,categorie FROM categories');
                while ($cat = $categories->fetch_object()) { ?>
                    <option value="<?= $cat->id ?>"
                        <?php if ($cat->id == $sql->id_categories) {
                            echo 'selected';
                        } ?>
                    >
                        <?= $cat->categorie ?>
                    </option>
                <?php } ?>
            </select>


            <input type="hidden" name="id" value="<?= $id ?>">
        </td>
    </tr>
    <tr>
        <td>
            <select class="textbox" style="width:90%;" name="priority" required>
                <option value="Urgent" <?php if ($sql->etat == "Urgent") {
                    echo 'selected';
                } ?>>Urgent
                </option>
                <option value="Forte" <?php if ($sql->etat == "Forte") {
                    echo 'selected';
                } ?>>Forte
                </option>
                <option value="Moyenne" <?php if ($sql->etat == "Moyenne") {
                    echo 'selected';
                } ?>>Moyenne
                </option>
                <option value="Faible" <?php if ($sql->etat == "Faible") {
                    echo 'selected';
                } ?>>Faible
                </option>
                <option value="Osef" <?php if ($sql->etat == "Osef") {
                    echo 'selected';
                } ?>>Osef
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td class="valider" colspan="2"><input name="Valider" value="Editer" type="submit"/></td>
    </tr>
    </form>
</table>