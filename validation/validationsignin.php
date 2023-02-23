<?php

$submit = $_POST['submit'];
//  oukhauar@gmail.com
if(isset($submit)){
      $nom_prenom = $_POST['nom_prenom'];
      $password = $_POST['password'];
      $email = $_POST['email'];

      if(!empty($nom_prenom) && !empty($password) && !empty($email)){
             $nameFile = "../RepUsers/".$nom_prenom.".txt";
             if(!file_exists($nameFile)){   // signifer que le compte est existe
                  exit("le compte n'exit pas !");
             }else {
                  // recuperer UID  qui existe dans leur fichier 
              $fileUser = fopen($nameFile,"r") or die('Ouverture du fichier fileuser impossible !');
                       while(!feof($fileUser)){
                        $uid = fgets($fileUser);
                        echo $uid;
                       
                             break;
                       }
                  fclose($fileUser);
                 //--------------------------chercher uid recupere dans le fichier passwod-----------------------------------
      $filepassword = fopen("../etc/passwod.txt","a+")or die('Ouverture du fichier password impossible !');
                  $user = "";
                  $array=array();
                  while(!feof($filepassword)){
                        $user= fgets($filepassword); 
                       // echo $user;
                        $array = explode("|",$user);
                        // echo "<pre>";
                           
                        // print_r($array);

                        // echo "</pre>";
                        // print_r($array);
                        if($uid == $array[0]){   // uid recuepre dans le fichier passwod et le meme dans le fichier de user , donc sont identiques
                                      // verifier l'email et password
                                   if(strcmp($password,$array[4])==0 && strcmp($email,$array[3])==0){
                                    
                                       //  genere un Token qui lui meme chaine de user
                                            $tokenfile = fopen("../token.txt","w+") or die("le file token n'existe pas !");
                                            fwrite($tokenfile,$user);
                                            fclose($tokenfile);

                                        header("Location: http://localhost/project/ExercicePhp/profile.php?uid=".$uid."");
                                   }else {
                                     echo"le mode passe ou l'email est incorrect !";
                                   }
                        }
                       

                        }

       fclose($filepassword);
                       
                        
                       

             }
      }

}