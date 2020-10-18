<?php 


class VideoDetailsFromProvider {


  private $con;
  public function __construct($con){

    $this->con=$con;

  }

    public function createUploadForm(){

        $fileInput =$this->creatFileInput();
        $titleInput=$this->createTitleInput();
        $desccriptionInmut=$this->createDescriptionInput();
        $privacyInput=$this->createPrivatyInput();
        $categoryInput=$this->createCategoryInput();
        $uploadBtutton=$this->createUploadBottun();

    return" 
        
    <form action='processing.php' method='POST' id='form'>

    $fileInput
    <br>
    $titleInput
    <br>
    $desccriptionInmut
    <br>
    $privacyInput
    <br>
    $categoryInput
    <br><br><br><br>
    $uploadBtutton
    
    </form>";
    
    }

    private function creatFileInput(){


        return'
        <div class"form-group">
        <input type="file" name="fileInput" class="form-control-file" id="exampleFormControlFile1" required>
      </div>
      '; }



      private function createTitleInput(){

        return'
        <div class"form-group">
            <input type="text" name="titleInput" class="form-control" placeholder="Title" required>
        </div>
        ';}



      private function createDescriptionInput(){

        return'
        
        <div class"form-group">
        <textarea class="form-control" name="descriptionInput" id="exampleFormControlTextarea1" rows="3" placeholder="description" required ></textarea>
    
        </div> '; }


      private function createPrivatyInput(){

            return'
            
            <select class="custom-select" name="category">
              <option selected>Open this select menu</option>
              <option value="0">Public</option>
              <option value="1">Privet</option>
              
            </select>   '; }


      private function createCategoryInput(){

                   //display category
                    $query=$this->con->prepare("select * from categoris");
                    //execute qury
                    $query->execute();


                    $html='<br> <select class="custom-select" name="categoryInput">

                    
                 ';



                    while($row=$query->fetch(PDO::FETCH_ASSOC)){
                        
                        $name= $row ["name"];  //name culomn you want show
                        $id=$row["id"];
                        $html.=" <option value='$id'>$name</option>";
                      }

                    $html.='</select> ';

                    return $html;

            }




    private function createUploadBottun(){


      $html="<button name='uploadButton' class='btn btn-primary'>Upload</button>";
      return $html;



    }













    }
?>