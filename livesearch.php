<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connection.php';
$search = $_GET['q'];

$sql = "SELECT name FROM registration where name LIKE '%$search%'";
$result=  mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

while ($row){
    echo '$row[name]';
}

