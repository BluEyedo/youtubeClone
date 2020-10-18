<?php

ob_start();
date_default_timezone_set("Asia/Bangkok");


    try{
        $h="localhost";
        $dbn="mysql";
        $con= new PDO("mysql:host=127.0.0.1:3307;dbname=youtubeclone","root","root");

        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        echo "Connection ss";
    }
    
    catch(PDOException $e){

        echo "Connection Failed"."<br>". $e->getMessage();
    }


?>