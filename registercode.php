<?php
session_start();
include('dbconfig.php');

if(isset($_POST['register_btn']))
{
    $fname =  $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $confirm_password =$_POST['confirm_password'];

    if($password == $confirm_password)
    {
        // Check Email
        $checkemail = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
            // Already Email Exists
            $_SESSION['message'] = "Already Email Exists";
            header("Location: register.php");
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
            {
                $_SESSION['message'] = "Registered Successfully";
                header("Location: login.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong!";
                header("Location: register.php");
                exit(0);
            }
        }
    }
    else
    {
        $_SESSION['message'] = "Password and Confirm Password does not Match";
        header("Location: register.php");
        exit(0);
    }
}
?>