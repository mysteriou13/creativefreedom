<?php 

include_once("basepage.php");

class project extends site{

public function newproject($name){

$name1 = "./workplace/".$name;

$name2 = "./workplace/".$name."/index.php";

$page = file_get_contents('./creatsite/class/modelpage.txt');

$project = fopen("./workplace/listeproject.txt", "a+");

$p = $name.PHP_EOL;

$p2 = file_get_contents("./workplace/listeproject.txt");

$p3 = explode(PHP_EOL,$p2);

$p4 = count($p3);

$p5 = 0;

$n1 = 0;

while($p5<$p4){

$p5++;

$p6 = str_replace($name,1,$p3[$p5-1]);

if($p6 == 1){

$n1 = 1;

}

}

if($n1 == 0){

fwrite($project,$p);

mkdir($name1);

fopen($name2,"a+");

fwrite($name,$page);

fclose($name2);

}

$a = fopen("./workplace/".$name."/listepage.txt","a+");

$A ="./workplace/".$name."/listepage.txt";

$a2 = "index.php\n";

$a3 = file_get_contents($A);

$a4 = explode(PHP_EOL,$a3);

$a5 = count($a4);

$a6 = 0;

$n2 = 0;

while($a6<$a5){

$a6++;

$a7 = str_replace($name,1,$a4[$a6-1]);

if($a7 == 1){

$n2 = 1;

}

}

if($n2 == 0){

fwrite($a,$a2);

}

if($n2 == 1){

echo 'project existe déja';

}

fclose($a);

}

public  function listproject(){

$i = "./workplace/listeproject.txt";

if(file_exists($i)){

$p = file_get_contents("./workplace/listeproject.txt");

$p2 = explode(PHP_EOL, $p);

$p3 =count($p2);
 
$p4 = 0;

$a3 = 0;

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

while($a3<$p3-1){

$a3++;

$page = "workplace.php?site=".$p2[$a3-1]."&ligne=".$a3."&url=".$url."";

$page = htmlspecialchars(trim($page));

$page1 = $p2[$a3-1];

$page1 = htmlspecialchars(trim($page1));

echo'</br>';

echo "

<script type = 'text/javascript'>


function reply_click(clicked_id)
{

 
}

</script>

";

echo "

<div id ='$page1' onClick='reply_click(this.id)'>$page1 </div>

<script type='text/javascript'>

</script>

 ";

echo "</div>";

}

}

}


public function deleteproject($name,$n1){

   $ptr = fopen("./workplace/listeproject.txt", "r");
   $contenu = fread($ptr, filesize("./workplace/listeproject.txt"));
    
   /* On a plus besoin du pointeur */
   fclose($ptr);
 
   $contenu = explode(PHP_EOL, $contenu); /* PHP_EOL contient le saut à la ligne utilisé sur le serveur (\n linux, \r\n windows ou \r Macintosh */
   
   unset($contenu[$n1]); /* On supprime  */
   $contenu = array_values($contenu); /* Ré-indexe l'array */
    
   /* Puis on reconstruit le tout et on l'écrit */
   $contenu = implode(PHP_EOL, $contenu);
   $ptr = fopen("./workplace/listeproject.txt", "w");
   fwrite($ptr, $contenu);


$dossier_traite = "./workplace/".$name;


$repertoire = opendir($dossier_traite); // On définit le répertoire dans lequel on souhaite travailler.

 
while (false !== ($fichier = readdir($repertoire))) // On lit chaque fichier du répertoire dans la boucle.

{

$chemin = $dossier_traite."/".$fichier; // On définit le chemin du fichier à effacer.

 

// Si le fichier n'est pas un répertoire…

if ($fichier != ".." AND $fichier != "." AND !is_dir($fichier))

       {

       unlink($chemin); // On efface.

       }

}


rmdir($dossier_traite);

closedir($repertoire); 

}


public function listepage($name){

$p = "./workplace/".$name."/listepage.txt";

$p1 = file_get_contents($p);

$p2 = explode(PHP_EOL, $p1);

$p3 = count($p2);

$p5 = 0;

while($p5 < $p3){

$p5++;

$project = "./workplace/".$name."/".$p2[$p5-1];

echo "<a href = ".$project.">".$p2[$p5-1]."</a>";

echo '</br>';



}

}

}
?>
