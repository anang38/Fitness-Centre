<?php

$con = mysqli_connect("localhost","root","","healinghands");
if(!$con)
{
    die("connection failed".mysqli_connect_error());  
}
//echo 'connect succesfully';
?>