<?php require_once("config1.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Empty Live</title>
        <link href="https://fonts.google.com/specimen/Roboto?selection.family=PT+Sans:ital@1|Roboto:ital,wght@1,900">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/Homepagestyle1.css">
        <link rel="stylesheet" href="css/uploadStyle1.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

         <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            
       <script src="js/commonAction.js"></script>
       
        
    </head>

    <body>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->


        <header class="header"> <!--- open header--->

            <button class="navshowhide" aria-label="Create"><img src="pic/hor.png"></button>
            <a href="index.php">
                <img src="https://cdn.iconscout.com/icon/free/png-256/gg-good-game-play-logo-46229.png" alt="logo" class="logo">

            </a>
            <form  action="search.php" method="GET"class="search-bar" ></form> <!--- open search-bar--->
                <input class="serach-input"type="search" placeholder="search" aria-label="search" name="titleSearch">
                <button type="submit" class="search-btn">
                <img src="pic/search-black.png">
                </button>

            </form> <!--- close search-bar--->

            <div class="menu-icon">  <!--- open menu-icon--->

             <a href="testupload.php" aria-label="Create">

                <img class="upl"src="pic/upload.png" alt="upload video">

             </a>


    
             <a href="#">

                <img class="menu-channel-icon" src="http://unsplash.it/36/36?gravity=centeer" alt="your channel">

             </a>
             
             
            </div>  <!--- close menu-icon--->




        </header>  <!--- close header--->

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<aside class="side-bar" id="side-bar" style="display: none;">

    <br><br>


    <div class="list-group">

        <a href="index.php" class="list-group-item list-group-item-action"><img src="pic/home.png">   Home</a>
        <a href="#" class="list-group-item list-group-item-action" ><img src="pic/profile.png">   Profile</a>
        <a href="testupload.php" class="list-group-item list-group-item-action"> <img src="pic/upload-video.png">   Upload video</a>       
        <a href="#" class="list-group-item list-group-item-action"><img src="pic/settings.png">   Settings</a>
        <a href="#" class="list-group-item list-group-item-action"><img src="pic/help1.png">   Help</a>
</div>




</aside>




<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->


        <div class="categories">  <!--- open categories--->

            <section class="category-section"> <!--- open category-section--->

                <button class="category active">All</button>
                <button class="category">Music</button>
                <button class="category">Sports</button>
                <button class="category">Education</button>
                <button class="category">Gaming</button>
                <button class="category">News</button>
 

            </section>  <!--- close categories-section--->



        </div> <!--- close category--->

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="main-section"> <!--- open main-section--->

         <div class="videos" >    <!---   احتواء كل الفيديوهات open videos--->