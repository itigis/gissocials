<?php
//please enter the following parameters to start your connection 
$host = "";
$port = "";
$dbname = "";
$user = "";
$password = "";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");


//to start the session and cookie lifetime 
session_start();

//  $_SESSION : An associative array containing session variables available to the current script. 

//example for $_SESSION
//$_SESSION['time']     = time();


 
?>