<?php 
include "functions.php";
if(!is_numeric($prix)){
    die("ce n'est pas un nombre");
}

//$libelle=$_POST['libelle'];
extract($_POST);//$libelle,$prix,...
store($libelle,$qtestock,$prix);

?>
ajout effetue avec succes