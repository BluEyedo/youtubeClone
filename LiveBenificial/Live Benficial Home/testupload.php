


<?php  include_once("include/header1.php") ?>
<?php  include_once("class/VideoDetailsFromProvider.php") ?>

   


    <section class="video-section">     <!--- open video-section--->




    <!----------------------------   open main upload form  --------------------------------->
        
    <form action='p.php' method='POST' id='form' enctype="multipart/form-data">
    <div class"form-group">
        <input type="file" name="fileInput" class="form-control-file" id="exampleFormControlFile1" required>
      </div>
      <br>
      <div class"form-group">
            <input type="text" name="titleInput" class="form-control" placeholder="Title" required>
        </div>
        <br>
        <div class"form-group">
        <textarea class="form-control" name="description"  rows="3" placeholder="description" required ></textarea>
        <br>
        </div>

        <br>
        <select class="custom-select" name="category">
              <option selected>Open this select menu</option>
              <option value="0">Public</option>
              <option value="1">Private</option>
              
            </select>
            <br>
            <br>
            <button type='submit'name='uploadButton' class='btn btn-primary'>Upload</button>
        
        
        
                       
    </form>


    <!----------------------------   close main upload form  --------------------------------->







    </section>   <!--- close video-section--->

 <?php include_once("include/footer.php")?>

