

<?php  include_once("include/header1.php") ?>
<?php  include_once("class/VideoDetailsFromProvider.php") ?>

   


    <section class="video-section">     <!--- open video-section--->




    <!----------------------------   open main upload form  --------------------------------->
        
    <?php $uploadForm=new VideoDetailsFromProvider($con);
     echo $uploadForm->createUploadForm(); 
     
 


     ?>
     

    


    <!----------------------------   close main upload form  --------------------------------->







    </section>   <!--- close video-section--->

 <?php include_once("include/footer.php")?>