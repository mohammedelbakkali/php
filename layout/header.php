
<?php

require_once './ifconnect.php';

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Panel de Controle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo "/project/ExercicePhp/profile.php?".$uid.""; ?>  >Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li> 
                <form action="" method="post">
                    <input type="submit" value="logout" name="logout">
                </form>
            </li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/ExercicePhp/produitPage.php" tabindex="-1" aria-disabled="true">product</a>
        </li>
      </ul>
      <form class="d-flex">
       
      
      </form>
    </div>
  </div>
</nav>





<?php

if(!empty($_POST['logout'])){
  $token = fopen("./token.txt","w");

  fclose($token);
  
  $res = unlink("./token.txt");
  
  if($res){
      header("Location: http://localhost/project/ExercicePhp/signin.php");   
  }else{
     exit('error in sigout !');
  }
}



?>