<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include "_menu.php";?>

form>table>tr*3>td*2
<form action="store.php" method="post">
    <table align="center">
        <tr>
            <td>Libelle</td>
            <td><input type="text" name="libelle" id=""></td>
        </tr>
        <tr>
            <td>Prix: </td>
            <td><input type="number" step="0.01" name="prix" id=""></td>
        </tr>
        <tr>
            <td>Qte stock</td>
            <td><input type="number" name="qtestock" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><button>Valider</button></td>
        </tr>
    </table>
</form>
    
</body>
</html>