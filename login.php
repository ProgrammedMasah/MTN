<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username))
        {
        echo "<script> alert('Please Enter your name'); </script>";
        }
        elseif(empty($password))
        {
        echo "<script> alert('Please Enter the password'); </script>";
        }
        elseif ($username === 'admin' && $password == '123')
        {
            header('location: manager.php');
        }  
    }
?>