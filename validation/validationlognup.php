<?php


$submit = $_POST['submit'];

if(isset($submit)){
    
    $nome = $_POST['nome'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($nome) && !empty($prenom) && !empty($email) && !empty($password) ){
              // créer le compte 
            $nameuser = $nome."."."$prenom";
            $fileUser = fopen("../RepUsers/".$nameuser.".txt","a") or die("Ouverture du fichier fileuser impossible !");
            $iduser =rand(1,20000);
            $textid= $iduser."\r\n";
            fwrite($fileUser , $textid);
            fclose($fileUser);


            $filepasswod = fopen("../etc/passwod.txt","a") or die("Ouverture du fichier passwod  impossible !");
            $text =$iduser."|".$nome."|".$prenom."|".$email."|".$password."|"."\r\n";
            fwrite($filepasswod , $text);
            fclose($filepasswod);
            header("Location: http://localhost/project/ExercicePhp/signin.php"); 
            
        

    }else{
        exit('tous les champs sont obligatoires !');
    }

}else{
     exit('submit is required !'); 
}