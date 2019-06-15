<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>de </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
   <ul>
       <li><a href="a.php?p=hp">Hp</a></li>
       <li><a href="a.php?p=dell">Dell</a></li>
   </ul>

<hr >

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto shadow    ">
        <form   action="a.php"  method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Mot de passe</label>
    <input  name="passe" type="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le mot de passe">
  </div>

  
  <button class="btn btn-primary">Valider</button>
</form></div>
    </div>
</div>





</body>
</html>