<?php


class videoUploadData{


//make the constructor
private $videoDataArray,$title,$description,$privacy,$category,$uploadedBy;
public function __construct($videoDataArray,$title,$description,$privacy,$category,$uploadedBy){


    $this->videoDataArray=$videoDataArray;
    $this->title=$title;
    $this->category=$category;
    $this->privacy=$privacy;
    $this->description=$description;
    $this->uploadedBy=$uploadedBy;



}






}


?>