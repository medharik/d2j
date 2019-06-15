<?php
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
if(isset($_POST['email']) && isset($_POST['passe'])){

    $email=$_POST['email'];
    $passe=$_POST['passe'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if(isset($_GET['p'])) {?>
   <h2>le produit est <?= $p;?></h2> 
<?php } ?>
<?php if(isset($_POST['email']) && isset($_POST['passe'])){ ?>

   <ul>
       <li>Email : <?=$email;?></li>
       <li>Mot de passe  : <?=$passe;?></li>
   </ul>
<?php }?>
</body>
</html>