<!doctype html>

<?php 

include_once("./creatsite/class/project.php");

$project = new project();

?>

<html lang = "fr" >

<head>

<meta charset = "utf-8">

</head>

<body>

<header>

</header>


<div>

Créer un projet

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>"  method = "post">

nom <input type = "text" name = "project" value = "

<?php

if(isset($_POST['project']) && !empty($_POST['project'])){

echo $_POST['project'];

}

 ?>

">

<?php 

if(isset($_POST['project']) && !empty($_POST['project'])){

$project->newproject($_POST['project']);


echo 'le project'.$_POST['project'].'a bien etait créer'.;

}

Créer un projet
?>

</br>

<input type = "submit" value = "valider">

</form>

</div>


<footer>

</footer>


</body>

</html>

