<?php
$server_name="localhost";
$username="root";
$password="";
$db_name="lab_pw5";

//create connection to db
$connection= mysqli_connect($server_name,$username,$password,$db_name);

//check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>