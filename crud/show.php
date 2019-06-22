<?php
include "functions.php";
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
$produit=find($id,"produit");  

}
//redirection vers index
//header("location:index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details du produit</title>
</head>
<body>
<h2>Libelle : <?=$produit['libelle']?></h2>
<h2>Prux : <?=$produit['prix']?>DHS</h2>
    
</body>
</html>