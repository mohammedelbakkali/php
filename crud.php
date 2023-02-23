


<div class="container" style="margin-top:90px;">
      <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
               <h3>CRUD :</h3>

           <form action="submitproduct.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nom produit</label>
  <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Description</label>
  <input type="text" class="form-control" name="description"  id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>

<input type="file"  id="fileToUpload" name="fileToUpload"> 
<input type="submit" value="submit" name="submit">


</form>



           </div>
           <div class="col-md-3"></div>
      </div>
</div>



<?php
//===================== upload file=====================
// $currentDirectory = getcwd();
// $uploadDirectory = "RepUsers/";

// $errors = []; // Store errors here

// $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

// $fileName = $_FILES['the_file']['name'];
// $fileSize = $_FILES['the_file']['size'];
// $fileTmpName  = $_FILES['the_file']['tmp_name'];
// $fileType = $_FILES['the_file']['type'];

// $fileExtension = strtolower(end(explode('.',$fileName)));

// $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

// if (isset($_POST['submit'])) {

//   if (! in_array($fileExtension,$fileExtensionsAllowed)) {
//     $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
//   }

//   if ($fileSize > 4000000) {
//     $errors[] = "File exceeds maximum size (4MB)";
//   }

//   if (empty($errors)) {
//     $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

//     if ($didUpload) {
//       echo "The file " . basename($fileName) . " has been uploaded";
//     } else {
//       echo "An error occurred. Please contact the administrator.";
//     }
//   } else {
//     foreach ($errors as $error) {
//       echo $error . "These are the errors" . "\n";
//     }
//   }

// }
//=============================================


?>