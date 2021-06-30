<?php
session_start();

if(isset($_SESSION['username'])){


}
else{

    header('location: login.php');
}

?>


<!DOCTYPE html>
<html>
<style>
.error {color: #394393;}


</style>

 <?php include('header2.php')?>



 <?php


    $current_data = file_get_contents('info.json');  
    $array_data = json_decode($current_data, true);  
    /*$extra = array(  
         'Name'           =>     $_SESSION['name'],  
         'Email'         =>     $_SESSION['email'],
         'User Name'      =>     $_SESSION['username'],  
         'Password'     =>     $_SESSION['pass'],
         'dob'        =>     $_SESSION['dob'],  
         'gender'  =>     $_SESSION['gender'],
    );  
  */

    

    foreach($array_data as $row)  
        {  
            if($_SESSION['username']==$row["User Name"] && $_SESSION['password']){

             echo "<h1 class=\"error\" align = \"center\">Profile Name : ".$row["Name"]."</h1>";

             echo "<h1 class=\"error\" align = \"center\">Email Address : ".$row["Email"]."</h1>";

             echo "<h1 class=\"error\" align = \"center\">User Name : ".$row["User Name"]."</h1>";

             echo "<h1 class=\"error\" align = \"center\">Date of Birth : ".$row["dob"]."</h1>";

             echo "<h1 class=\"error\" align = \"center\">Gender : ".$row["gender"]."</h1>";

            }
        }



 
?>


<body style="background-color:#DFF0E2;">




</body>


  <?php include('footer.php')?>

  </html>