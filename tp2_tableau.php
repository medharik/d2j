<?php
//tab associatif
define('URL',"http://lorempixel.com/400/400/technics/");
$hp=array(
    'libelle'=>'hp dv 6',
    'prix'=>5000,
    'qteStock'=>rand(10,40),
    'image'=>[URL.rand(1,4),URL.rand(1,4)],
);

$dell=[
    'libelle'=>'dell dv 6',
    'prix'=>4000,
    'qteStock'=>rand(10,40),
    'image'=>URL.rand(1,4)

];
$produits=[$hp,$dell];

for($i=0;$i<10;$i++){
    $p=[
        'libelle'=>'produit '.$i,
        'prix'=>rand(10,5000),
        'qteStock'=>rand(0,40),
        'image'=>URL.rand(1,10)
    
    ];    $produits[]=$p;;
    
}
//tab indexé

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
img{
    width:100px;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les tableaux</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- table>tr*2>td*4 -->
 <table class="table table-dark">

     <tr>
         <td>libellé</td>
         <td>prix</td>
         <td>qte stock</td>
         <td>photo</td>
     </tr>
     <?php foreach($produits as $c=>$v) {?>
     <tr>
         <td><?php echo $v['libelle'];?></td>
         <td><?php echo $v['prix']?></td>
         <td><?=$v['qteStock'];?></td>
         <td>
         <?php if(is_array($v['image'])) {?>
      <?php foreach ($v['image'] as $image) {
         ?>
         <img src="<?=$image ;?>" >
      
      
         <?php }//foreach
        
    } else { ?>

        <img src="<?=$v['image'] ;?>" >
         <?php } ?>
         </td>
     </tr>

     <?php } ?>
 </table>

</body>
</html>