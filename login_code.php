<?php
session_start();
include('dbconfig.php');

if(isset($_POST['login_button']))
{
    $email =  $_POST['email'];
    $password =  $_POST['password'];

    $query = "SELECT * FROM users where email='$email' and password='$password' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $row = mysqli_fetch_array($query_run);


        $_SESSION['message'] = "You are Logged In Successfully"; //message to show
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password"; //message to show
        header("Location: login.php");
        exit(0);
    }
}
?>