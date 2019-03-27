<?php
$servername = "localhost";
$username = "username";
$password = "password";

Poopie 
  This code is kinda shitty
//Create connection
$conn = new mysqli($servername,$username,$password);

//Check connection nibba
if ($conn->connect_error) {
die("Connection failed:".$conn->connect_error);
}
echo"Connected Successfully";
?>
