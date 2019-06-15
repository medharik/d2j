<?php

function connecter_db(){
    
 $cnx=new PDO("mysql:host=localhost;dbname=d2j","root","");
 return $cnx;
} 
function store($libelle,$qtestock=0,$prix=0){
    // connect
   $cnx= connecter_db(); 
    //preparer la requete
$rp=$cnx->prepare("insert into produit(libelle,qtestock,prix) 
values (?,?,?)");
    // lancer 
$rp->execute(array($libelle,$qtestock,$prix));
} 






?>