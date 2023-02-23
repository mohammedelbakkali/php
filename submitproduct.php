<?php
if(isset($_POST['submit'])){
     $nom = $_POST['nom'];
     $description=$_POST['description'];
   

    //=====================================

    $filetoken = fopen("token.txt","r") or die('Ouverture du fichier token impossible !');
    while(!feof($filetoken)){
     $info = fgets($filetoken);
     $array= explode("|",$info);
    //  print_r($array);
      
     
      $nameuser = $array[1].".".$array[2];

      //===========================UPLOAD============================
      $target_dir = "RepUsers/".$nameuser."/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }
      
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
      
            //==========================================================


     
      $data =file("product/".$nameuser.".txt");
      $line = $data[count($data)-1];

      
         echo "<pre>";
         print_r($data);
         echo "</pre>";

     if(!empty($nom) && !empty($description)){
        $fileUser = fopen("product/".$nameuser.".txt","a+") or die("Ouverture du fichier fileuser impossible !");
        $idProduct = count($data)+1;
           $txt =$idProduct."|".$nom."|".$description."|".$target_file."\r\n"; 

           fwrite($fileUser , $txt);
        fclose($fileUser);
     }


   break;

   }


  fclose($filetoken);

  $tokenfile = fopen("token.txt","r") or die("le file token n'existe pas !");

    $user= fgets($tokenfile);
    $array = explode("|",$user);

    fclose($tokenfile);

  header("Location: http://localhost/folder/php-main/php/profile.php?uid=".$array[0]."");  
}