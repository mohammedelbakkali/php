<?php


$token = fopen("./token.txt","w");

fclose($token);

$res = unlink("test.txt");

if($res){
    header("Location: http://localhost/folder/php-main/php/signin.php");   
}else{
   exit('error in signout !');
}

?>