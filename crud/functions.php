<?php

function connecter_db(){

 $options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
); 
try{
    $cnx=new PDO("mysql:host=localhost;dbname=d2j","root","");
    
}  catch(PDOException $e){
    die("erreur de connexion bd ".$e->getMessage());
}
 
 return $cnx;
} 
function store($libelle,$qtestock=0,$prix=0){
    try{
    // connect
   $cnx= connecter_db(); 
    //preparer la requete
$rp=$cnx->prepare("insert into produit(libelle,qtestock,prix) 
values (?,?,?)");
    // lancer 
$rp->execute(array($libelle,$qtestock,$prix));
    }catch(PDOException $e){
        die("erreur d'ajout bd ".$e->getMessage());

    }
} 
function delete($id,$table){
    try{
    // connect
   $cnx= connecter_db(); 
    //preparer la requete
$rp=$cnx->prepare("delete from $table where id=?");
    // lancer 
$rp->execute(array($id));
    }catch(PDOException $e){
        die("erreur de suppression bd ".$e->getMessage());

    }
} 
function update($id,$libelle,$qtestock,$prix){
    try{
    // connect
   $cnx= connecter_db(); 
    //preparer la requete
$rp=$cnx->prepare("update produit set libelle=? , qtestock=? , prix=? where id=?");
    // lancer 
$rp->execute(array($libelle,$qtestock,$prix,$id));
    }catch(PDOException $e){
        die("erreur de modif bd ".$e->getMessage());

    }
} 

function all($table){
    try{
    // connect
   $cnx= connecter_db(); 
    //preparer la requete
$rp=$cnx->prepare("select * from $table order by id desc");
    // lancer 
$rp->execute(array());
$resultSet=$rp->fetchAll();
return $resultSet;    
}catch(PDOException $e){
        die("erreur de recup bd ".$e->getMessage());

    }
} 

function find($id,$table){
    try{
    // connect
   $cnx= connecter_db(); 
    //preparer la requete
$rp=$cnx->prepare("select * from $table  where id=?");
    // lancer 
$rp->execute(array($id));
$resultSet=$rp->fetch();
return $resultSet;    
}catch(PDOException $e){
        die("erreur de recup bd ".$e->getMessage());

    }
} 








?>