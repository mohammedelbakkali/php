
<?php


$uid = $_GET['uid'];

$array =array();
$nom="";
$prenom="";
$email="";
$password="";

$tokenfile = fopen("token.txt","r") or die("le file token n'existe pas !");

    $user= fgets($tokenfile);
    $array = explode("|",$user);
        if($uid==$array[0]){

            // echo "<pre>";
            // print_r($array);
            // echo "</pre>";
             $uid=$array[0];
             $nom=$array[1];
             $prenom=$array[2];
             $email=$array[3];
             $password =$array[4];
        }

fclose($tokenfile);

?>