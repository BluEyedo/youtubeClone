<?php  include_once("include/header1.php") ;

// check if submition of form or button is pressed
include("conDtatabase.php");
if(isset($_POST['uploadButton'])&&isset($_POST['description'])){

      $description=$_POST['description'];
      $name=$_FILES['fileInput']['name'];
      $tmp=$_FILES['fileInput']['tmp_name'];
      $titleInput=$_POST['titleInput'];

      // move_uploaded_file($tmp,"videos/".$name);

      $allowType="mp4";
      $path=$tmp.uniqid().basename($name);


      $videoPath=strtolower(pathinfo($path,PATHINFO_EXTENSION));

      if($videoPath==$allowType){

          move_uploaded_file($tmp,"videos/".basename($name));  
          $sql="insert into video (name,title,description) values ('$name','$titleInput','$description')";
          $res=mysqli_query($con,$sql);

                if($res==1){
                  echo  basename($name);
                    echo "<h5 style='margin-top:10%' ;>Upload sucsess</h5>";
                    
                  
                    
                  }
          }

      else{echo"<br><br>"."Invalid Type:"."<br>"."you Most Enter mp4 Only";}
      

}

else{  echo"<br>No File";};
    //








?>
