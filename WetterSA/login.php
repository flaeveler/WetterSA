<?php

$error = ''; // Variable to store error massage
$button = $_POST['submit'];

$noInput = empty($_POST['user'] or $_POST['password']);

if (isset($button)) {
    if ($noInput) {
        $error = "Username or password invalid ";
        echo $error;
    } else {


// define user and password

        $username = $_POST['username'];
        $password = $_POST['password'];



//connection to server and choosing the database

        $conn = mysqli_connect('localhost', 'root', '', 'login', '3306', '');


// query the database for user

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");


        $row = mysqli_num_rows($result);
        if ($row == 1) {
//  redirecting to homebase          
            header("location: homeBase.php");
            
        } else {
           $error = "username or password invalid";
        }
        mysqli_close($conn);
    }
}



