


<div class="container" style="margin-top:90px;">
      <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
               <h3>CRUD :</h3>

           <form action="submitproduct.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Product Name</label>
  <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="Enter the name of the Product">
</div>
<label for="fileToUpload">Image</label>
<br>
<input type="file"  id="fileToUpload" name="fileToUpload"> 
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Description</label>
  <input type="text" class="form-control" name="description"  id="formGroupExampleInput2" placeholder="Enter an appropriate description for your product">
</div>


<input type="submit" value="submit" name="submit">


</form>



           </div>
           <div class="col-md-3"></div>
      </div>
</div>



