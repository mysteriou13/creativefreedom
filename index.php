<!doctype html>

<!--index-->

<html lang = "fr" >
<?php 

include_once("./creatsite/class/project.php");

$place = new project();

?>

<title>
creative freedom
</title>


<head>

<meta charset = "utf-8">

<link rel = "stylesheet" href  = "css/style.css" >

</head>

<body>

<header>
 
</header>

<article>

<h1>

</h1>

<section>


</br>

workplace

<div>



<a href = "<?php  echo htmlspecialchars(trim("creatproject.php"))?>"><?php  echo htmlspecialchars(trim("créer un project"))?></a>

<div id = "cadre">


<p>

<?php 

$place->listproject();

?>

</p>


</div>


<div id = "canvas" >

</div>

</div>

</section>
</article>

<footer>

</footer>

</body>
</html>
