
<?php
    session_start();
    session_unset();
    session_destroy();
    /*$_SESSION['username'] = "";
    $_SESSION['password'] = "";*/
    header('location:login.php');

?>