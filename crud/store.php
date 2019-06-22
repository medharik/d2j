<?php 
include "functions.php";

//$libelle=$_POST['libelle'];

extract($_POST);//$libelle,$prix,...
if(isset($_POST) && !empty($_POST)){

    store($libelle,$qtestock,$prix);
}
header("location:index.php");
?>
