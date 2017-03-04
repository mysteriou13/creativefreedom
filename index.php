<!doctype html>

<!--index-->

<?php 

include_once("./creatsite/class/project.php");

$place = new project();

?>

<title>

</title>

<meta charset = "utf-8">

<head>

</head>

<body>

<header>
 
</header>

<article>

<h1>

</h1>

<section>

<p>

workplace

</br>

<form action = "<?php $_SERVER['PHP_SELF']?>" method  = "POST">


creér un  projet
<input type = "text" name= "project"  value = "">

</br>
</br>

<input type = "submit" value = "creer un nouveau project">

<?php 


if(isset($_GET['site']) && !empty($_GET['site'])){


echo "</br>".$_GET['site']."</br>";

}


if(isset($_POST['project']) && !empty($_POST['project'])){

$place->newproject($_POST['project']);

}

?>

</form>

liste project

<?php 

$place->listproject();

?>

<p>

</section>
</article>

</body>
</html>
