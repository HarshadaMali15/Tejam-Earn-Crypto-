<?php
include('functions/userfunctions.php'); 
include('includes/header.php');
?>

<section class="scr_form mt-0" >
<div class="container">
<div class="vision-sub-heading">
      <h2  class="mb-4 pt-3">Upload <span>Screenshot</span> </h2>
    </div>
    

  
    <form action="uploade-handler.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
       
        <div class="form-group pt-4">
            <label for="document">Upload Screenshot (PDF or Image):</label><br>
            <input type="file" class="form-control-file pt-3" id="document" name="document" accept=".pdf, .jpg, .jpeg, .png" required>
        </div>
        <div class="pt-5">
        <button type="submit" name="upload_doc" class="btn btn-primary ">Upload</button>
        </div>
    </form></section>
</div>

<?php include('includes/footer.php'); ?>
