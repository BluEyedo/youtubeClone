<?php
//Defining the localhost information
$server= "localhost";
$usernameDB = "root";
$passDB = "root";
$MyDB = "LiveBenificial";

//Connecting to the Database
$conn= mysqli_connect($server,$usernameDB,$passDB);
mysqli_select_db($conn, $MyDB);
$current = date("Y");

// if sign button is pressed do what's within
if (isset($_POST['signbutt'])){
//declaring information
$mail= $_POST['mailup'];
$username= $_POST['userup'];
$password = $_POST['psswordsg'];
$confirm = $_POST['psswordconfirm'];
$gender = $_POST['gender'];
$c=0;

//seeking for user that has same username
$DBSelection = "SELECT UserName FROM userinfo WHERE (USerName='$username');";
$result = mysqli_query($conn, $DBSelection);
$rowcount= mysqli_num_rows($result);

//seeking for email if it's registered in system
$DBSelection2 = "SELECT Email FROM userinfo WHERE (Email = '$mail');";
$result2 = mysqli_query($conn, $DBSelection2);
$rowcount2 = mysqli_num_rows($result2);

// if there is a row that has the same username and email
// and password dosn't match then show ERROR
if ($rowcount == 1 && $rowcount2 == 1 && $password != $confirm){
    $passerror= "you password confirm doesn't match";
    $mailerror="This email already registred in the system";
    $usererror="this username is already taken";  
}
// if there is a row that has the same username and email
// then show ERROR
else if($rowcount == 1 && $rowcount2 == 1){
        $mailerror="This email already registred in the system";
        $usererror="this username is already taken";  
    } 
   else if($rowcount == 1){
        $usererror="this username is already taken";
 
    }else if($rowcount2 == 1){
        $mailerror="This email already registred in the system";
        
        
//else if there is no rows that has the same username 
//or email then insert data into the system
    } else if ($rowcount == 0 && $rowcount2 == 0){  
                if($password == $confirm){
                $create= "INSERT INTO userinfo
                (USerName,Email,Gender,AGE,picture,pass)
                VALUES('$username','$mail','$gender',null,null,'$password')";
 // username / email / gender / age /picture /password
                mysqli_query($conn, $create);
                $succ = "you have registred into the system you can log in now"; 
                end();
            
            }else{
                $passerror = "you password confirm doesn't match";   
            }
}  
}
 
?>