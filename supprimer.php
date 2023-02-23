<?php

$a = $_POST['id'];



$filetoken = fopen("token.txt","r") or die('Ouverture du fichier token impossible !');
while(!feof($filetoken)){
 $info = fgets($filetoken);
 $array= explode("|",$info);
//  print_r($array);
  
 
  $nameuser = $array[1].".".$array[2];
   

  $file_path = "product/".$nameuser.".txt";

$line_number = $a;

// Read file into an array
$file_array = file($file_path);

// Remove the line at the specified index
unset($file_array[$line_number - 1]);

// Write the remaining lines back to the file
file_put_contents($file_path, implode("", $file_array));

break;

}

fclose($filetoken);

header("Location: http://localhost/project/ExercicePhp/produitPage.php"); 


?>

