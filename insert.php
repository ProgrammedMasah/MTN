<?php
$conn = mysqli_connect("localhost","id20085201_masah","pZK(+na4A+^{De%9","id20085201_masah_store");
if (isset($_POST["submit"]))
{
    $surname = $_POST['surname'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number_phone = $_POST['number_phone'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $password =$_POST['password'];
    $cite = $_POST['cite'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $job = $_POST['job'];
    

    $sql = "INSERT INTO users(surname, first_name, last_name, number_phone, email, user_name, password, cite, address, gender, date, job)
    VALUES('$surname', '$first_name', '$last_name', '$number_phone', '$email', '$user_name', '$password', '$cite', '$address', '$gender', '$date', '$job')";

    if (mysqli_query($conn, $sql))
    header('location: register.html');
}

mysqli_close($conn);