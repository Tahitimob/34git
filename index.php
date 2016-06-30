<?php


echo file_get_contents("texte.log");//lis le contenu du texte.log


//^pour écrire dans un fichier

$file = fopen("texte.log", "a");//A permet d'ajouter à la suite, plutot que de écraser avec le W
fwrite($file, date("Y-m-d H:i:s")." : script a ete ouvert\r\n");
fclose($file);

?>