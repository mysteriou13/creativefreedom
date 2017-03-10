<!doctype html>
<html>

<!-- workplace.php-->

<?php 

include_once("./creatsite/class/project.php");

$place = new project();

?>

<title>

</title>

<head>

</head>

<body>

<header>

</header>

<div>

<article>

<section>

<p>

list page:

</br>
</br>


<a href = "<?php echo  htmlspecialchars(trim($_GET['url'])); ?>"><?php echo  htmlspecialchars(trim("retour a l'index")); ?> </a>

</br>
</br>

<?php 

$p = "parametre.php&site=".$_GET['site'];

?>

<a href = "<?php echo htmlspecialchars(trim($p)); ?>" ><?php  echo htmlspecialchars(trim("parametre"))?> </a>
 
</br>
</br>

<?php

$link = "<a href =".$_GET['site'].">".$_GET['site']."</a>" ;

$place->listepage($_GET['site']);

?>

</p>

</section>

</article>

</div>

<footer>

</footer>
</body>

</html>
