<?php

session_start();
header('location:login.php');

//create connection
$conn = mysqli_connect ('localhost', 'root', '', 'midsem');
mysqli_select_db($con, 'midsem');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from register where email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows ($result);
    if($num == 1){
        echo "Username already taken";
    }
    else{
        $reg =" insert into register( firstname, lastname, email, password) values ('$firstname', '$lastname',  '$email', '$password')"; 
        mysqli_query($con, $reg);
        echo "registration successful";
    }
?>