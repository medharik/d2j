<?php 
$age=20;
$name="Ghita";
$gender="female";
//
$politesse=($gender=="male") ? "Mr":"Mme" ;
if($gender=="male"){
$color="skyblue";
}else{
$color="pink";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="iso-7777">
  <meta name="viewport" content="width=device-width, initial-scale=1.0;scallabale=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Débarras Paris SAINT GERMAIN EN LAYE et IDF, nettoyage, déblaiement. Devis gratuit, tarif pas cher de débarras, nettoyage professionnel toute la région ...
Vous avez consulté cette page de nombreuses fois. Date de la dernière visite : 28/04/19">
  <title>tp 1</title>
</head>
<body  style="background:<?php echo $color?>" >
<h1>bienvenue <?php echo $politesse; ?>    <?php echo $name ;?></h1>
<h2> tu as <?php echo $age; ?> ans</h2>

</body>
</html>