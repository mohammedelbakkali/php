

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <title>php 01</title>
</head>
<body style="background-image: url(pics/fond-bleu-degrade-luxe-abstrait-bleu-fonce-lisse-vignette-noire-studio-banner.jpg);">
        <div class="container">
           
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6 borderstyle">
                        <h1 style="text-align: center; font-family: 'Montserrat', sans-serif; color: rgb(86, 127, 204);">
                            Sign Up</h1>
                        <form action="validation/validationlognup.php" method="post">

                            <div class="inputstyle">  
                                <label for="nome">First name</label>    
                                <input type="text" name="nome" id="nome" placeholder="Enter your first name">
                            </div>
                            <div class="inputstyle">   
                                <label for="prenom">Last name</label>    
                                <input type="text" name="prenom" id="prenom" placeholder="Enter your last name">
                            </div>
                            <div class="inputstyle">    
                                <label for="email">Email</label>    
                                <input type="email" name="email" id="email" placeholder="Enter your email address">
                            </div>
                            <div class="inputstyle">
                                <label for="password">Password</label>   
                                <input type="password" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <div>
                                <input type="submit" value="submit" name="submit" class="btn btn-primary">
                            </div>

                        </form>                     
                    </div>
                <div class="col-md-3"></div>
                </div>
                </div>
</body>
</html>