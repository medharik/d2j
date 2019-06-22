<?php
include "functions.php";
if(isset($_POST['id']) && !empty($_POST['id'])){
  $id=$_POST['id'];
delete($id,"produit");  
}

//redirection vers index
header("location:index.php");
?>