<?php
$db=mysqli_connect("localhost","root","","newproject");
session_start();
error_reporting(0);
if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $name=$_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];
        $sql = "INSERT INTO register_user (Name, Date_Of_Birth, Age, Email,Resume)
                VALUES ('$n','$dob','$age', '$email','$name')";
        $result = mysqli_query($db, $sql);
        if ($result) {
            echo "<script>alert('User Registration Completed.')</script>";
            $n="";
            $dob = "";
            $age="";
            $email = "";
        header("Location: http://localhost/Project/register.php");
        } 
        else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
            header("Location: http://localhost/Project/register.php");
        }
}
?>