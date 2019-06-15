<?php 
include "functions.php";
$produits=all("produit");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center text-primary">liste des produits</h2>
 <table class="table table-dark">
     <tr>
         <td>#</td>
         <td>Libelle</td>
         <td>qteStock</td>
         <td>prix</td>
         <td>Actions</td>
     </tr>
<?php foreach($produits as $p){ ?>
     <tr>
         <td><?=$p['id']?></td>
         <td><?=$p['libelle']?></td>
         <td><?=$p['qtestock']?></td>
         <td><?=$p['prix']?></td>
         <td>
         <a href="" class="btn btn-info">C</a>
         <a href="" class="btn btn-danger">S</a>
         <a href="" class="btn btn-warning">M</a>
         </td>
     </tr>
<?php } ?>
 </table>   

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</body>
</html>