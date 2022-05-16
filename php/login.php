<?php
    session_start();
    $db=mysqli_connect("localhost","root","","newproject");
    $mail = $_POST['login_email'];
    $query= "SELECT id FROM register_user WHERE Email ='$mail'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['register_user'] = mysqli_fetch_array($result)[0];
        header("Location: http://localhost/Project/admin/php/job.php");
    }
    else{
        header("Location: http://localhost/Project/login.php");
    }
?>