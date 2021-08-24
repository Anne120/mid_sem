<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "midsem";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("failed to obtain connect");
}
?>