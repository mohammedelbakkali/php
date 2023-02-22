

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
             <div class="container">
                
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 borderstyle">
                    <h2 style="text-align: center;">Sign In</h2>
                    <form action="./validation/validationsignin.php" method="post">

                    <div class="inputstyle"><label for="nom_prenom">nom.prenom</label><input type="text" name="nom_prenom" id="nom_prenom" placeholder="nom.prenom"><br></div>
                    <div class="inputstyle"><label for="email">email</label>    <input type="email" name="email" id="email" placeholder="email"></div>
                    <div class="inputstyle"><label for="password">Password</label>  <input type="password" name="password" id="password"><br></div>
                    <div><a href="signup.php">créer un nouveau compte</a><br></div>
                    <div><input type="submit" value="submit" name="submit"></div>

                     </form>


                    </div>
                    <div class="col-md-4"></div>
             
             </div>
             </div>


 
 
</body>
</html>