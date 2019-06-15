<?php 
include "functions.php";

//$libelle=$_POST['libelle'];
extract($_POST);//$libelle,$prix,...
store($libelle,$qtestock,$prix);

?>
ajout effetue avec succes