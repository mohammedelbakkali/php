<?php


$token = fopen("./token.txt","w");

fclose($token);

$res = unlink("test.txt");

if($res){
    header("Location: http://localhost/project/ExercicePhp/signin.php");   
}else{
   exit('error in signout !');
}

?>