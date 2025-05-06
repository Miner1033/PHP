<?php
$servername="localhost";
$username="root";
$password="";
$db="user_db";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("error".mysqli_connect_error());
}


?>