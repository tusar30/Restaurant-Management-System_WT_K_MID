

<?php 

session_start();


if(isset($_SESSION['username'])){

        echo    '<!DOCTYPE html>
                <html>

                 ';
                include('header2.php');

        echo    '<style>
                .error {color: #394393;}
                </style>';


        echo    '<span class="error"> <b> <h1 align="center">';

        echo  '<br>Congratulations! '.$_SESSION['username'].'<br>'.' You are successfully login as a Receptionist <p><br></p>';

        echo  '</h1> </span>

                <body style="background-color:#DFF0E2;">




                </body>';

                include('footer.php');

        echo    '</html>';

        


}
else{

    header('location: login.php');
}

?>
