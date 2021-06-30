

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

 <?php include('header2.php')?>

<style>
.error {color: #394393;}


</style>


		<span class="error"> <b> <h1 align="center"><?php echo  "NOT SET UP YET ";?></h1> </span>
		<center><img  width="500" height="200" src="logo2.jpg" ></center>

<body style="background-color:#DFF0E2;">




</body>


  <?php include('footer.php')?>

  </html>