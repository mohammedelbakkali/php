
<?php


$filetoken = fopen("token.txt","r") or die('Ouverture du fichier token impossible !');
    while(!feof($filetoken)){
     $info = fgets($filetoken);
     $array= explode("|",$info);
    // print_r($array);
     
      $nameuser = $array[1].".".$array[2];
           
      $data =file("product/".$nameuser.".txt");
      $line = $data[count($data)-1];
      
      $chaine = explode("|",$line);
       
        
   $rang =  $chaine[0];

        $fileUser = fopen("product/".$nameuser.".txt","r") or die("Ouverture du fichier fileuser impossible !");
       $i=0;
        while(!feof($fileUser)){
          $i=$i+1;
           if($i==$rang){
              break;
           }

            $product= fgets($fileUser);
            // echo $product."<br>";
             $array2= explode("|",$product);
             
            
              echo '  
                      <form action="supprimer.php" method="post">
                      
                        
              <div class="card mb-3 shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 540px;margin-left:50px">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="'.$array2[3].'" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">'.$array2[1].'</p>
                    <p class="card-text"><small class="text-muted">'.$array2[2].'</small></p>
                    <input type="hidden" name="id"  value='.$array2[0].'  class="btn btn-danger">
                    <input type="submit"  class="btn btn-danger" value="supprimer"></input>
                  </div>
                </div>
              </div>
            </div>

              </form>
  ';
        }      
        fclose($fileUser);
  


    break;
   }


  fclose($filetoken);


  require_once "../ExercicePhp/layout/footer.php";

  ?>







