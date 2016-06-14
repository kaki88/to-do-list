<?php include('config.php'); ?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet" media="all" type="text/css">     <meta charset="utf-8">
    <title>To Do List</title>
    <link href="tooltip/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="tooltip/tooltip.js" type="text/javascript"></script>
</head>

<body onload="couleur();">
<?php include('cat.php'); ?>

<?php
if (isset($_GET['trashbin'])){
    include('corbeille.php');
}
else {
    include('liste.php');
}
?>

<?php
if (isset($_GET['id'])){
include('editer.php');
}
else {
    include('creer.php');
}
?>



<script>
    function cacher(){
    document.getElementById("addcat").classList.toggle("cacher");
    }
</script>
</body>
</html>