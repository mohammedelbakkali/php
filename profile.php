
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
       <?php require_once "./layout/header.php"; ?>
       <div class="alert alert-success" role="alert"> Welcome <?php  echo $nom; ?> ! </div>
         <div class="container">
             <div class ="row">
                 <div class="col-md-3"></div>
                 <div class="col-md-6">
                 <ul class="list-group">
                       <h3>les informations de votre compte </h3>
                        <li class="list-group-item">Nom : <?php echo $nom ; ?></li>
                        <li class="list-group-item">Prenom : <?php echo $prenom ; ?></li>
                        <li class="list-group-item">Email : <?php echo $email ; ?></li>
                        <li class="list-group-item">UID : <?php echo $uid ; ?></li>
</ul>

                 </div>
                 <div class="col-md-3"></div>
             </div>
         </div>

       
         <?php  require_once "./crud.php"; ?>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
