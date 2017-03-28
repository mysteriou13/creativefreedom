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

<div id = "workplace" >

<div id = "cadre">

<?php 

$place->listproject();

?>

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
