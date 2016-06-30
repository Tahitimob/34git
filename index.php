<?php
$file = fopen("texte.txt", "r");
var_dump(fread($file, filesize("texte.txt")));
fclose($file);


//^pour écrire dans un fichier

$file = fopen("texte.log", "w+");
fwrite($file, "mon contenu");
fclose($file);


?>