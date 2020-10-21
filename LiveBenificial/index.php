<?php include_once('Account.php'); 
	  include_once('login.php');

?>





<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login & Signup Form | CodingNepal</title>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Login CSS/Reg.css">
  </head>


  <body>

	<!--<video width="100%" height="100%" autoplay style="padding-left: 45vh;">
		<source src="RelaxingFilm.mp4" type="video/mp4">
	  </video>-->
<div class="wlcm">
	
	<h1>Welcome to Live Benificial</h1>
	<h3>to upload useful and prodoctive content to help people benifit from your own knowldege
		<br> or even to help yourself to focus on a specific content
	</h3>
</div>
	
</div>
</div>
<!--___login & signup white container______________________-->
    <div class="wrapper">
      <div class="title-text">
<div class="title signup">
LiveBenificial</div>
</div>
<div class="form-container">

<!--___Tabs slider for login and sign in______________________-->
        <div class="slide-controls">
<!--___Login tab______________________-->
          <input type="radio" name="slide" id="login" checked>
<!--___Sign up tab______________________-->
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>

<!--Login  format ______________________________________-->
</div>
<div class="form-inner">
          <form action="index.php" class="login" method="POST">
		  
            <div class="field">
              <input type="text" name="Usernamelog" placeholder="Email Address" required>
            </div>
<div class="field">
			  <input type="password" name="psswordlog" placeholder="Password" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="loginbutt"value="Login">
            </div>

			<small> <?php // if signed successfully print this
			 if(isset($succ)){
	echo($succ);	
	} ?>

 <?php if(isset($loginerror)){
		echo ($loginerror);
}?>

<?php // if there is something wrong check the sign up
if(isset($passerror) || isset($mailerror) || isset($usererror) ){
	echo "something is wrong check again";
} ?>
</small>

<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<!--         
N
E
X
T
-->
<!-- Create a new account format ______________________________________-->
<form  action="index.php" method="POST" class="signup">

			<div class="field_profile">
			<img class="profile"src="https://cdn1.iconfinder.com/data/icons/thanksgiving-filled-line-2/64/holiday_autumn_thanksgiving_pilgrim_woman-256.png">
			<img class="profile2" src="https://cdn1.iconfinder.com/data/icons/thanksgiving-filled-line-2/64/holiday_autumn_thanksgiving_pilgrim_man-256.png">
			</div>

			<!--\\ Email box ______________________________________-->
            <div class="field">
			
			  <input type="text" name="mailup" placeholder="Email Address" required>
			  <small><?php // if email existed then print this
			  if (isset($mailerror) && !isset($succ)){
				  echo $mailerror; 
				
				}unset($mailerror);
			
			  ?>
			  </small>
			 
			</div>
			<!--\\ Username Box ______________________________________-->
			<div class="field">
				<input type="text" name="userup" placeholder="Username" required>
				<small><?php // if username token then print this
				 if (isset($usererror) && !isset($succ)){
				  echo $usererror;
				 
				}
			   unset($usererror);	
			   
			  ?>
			  </small>
			  </div>
			<!--\\Password Box ______________________________________-->
			<div class="field">
              <input type="password" name="psswordsg" placeholder="Password" 
			  pattern="(?=.*\d)(?=.*[a-z]).{8,}" required>
			</div>
			<!--\\ Confirm Box ______________________________________-->
			<div class="field">
              <input type="password" name="psswordconfirm" placeholder="Confirm password" required>
			  <small> <?php // if password doesn't match print this
			  if(isset($passerror)){
				  echo $passerror;
			  } ?></small>
			</div>

			<!--\\ Birth Box ______________________________________-->
			<div class="field">
				<input type="date" name="birth" placeholder="birthday" required>
			</div>

			<!--\\Gender radio check_______________________________-->
			<center>
				<!--\\Female-->
			<div class="field">
				<label for="Female" style="display: inline-block;" >Female</label>
				<input type="radio" id="malein" name="gender" value="Female">
				<!--\\Male-->
				<label for="Male" style="display: inline-block; ">Male</label>
				<input type="radio" id="femalein" name="gender" value="Male" checked >
			</div>
		</center>
	

<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" name="signbutt" value="Signup">
			</div>
			

</form>


</div>
</div>
</div>
	<script src="Login JavaScript/Regist.js"></script>
  </body>
</html>
