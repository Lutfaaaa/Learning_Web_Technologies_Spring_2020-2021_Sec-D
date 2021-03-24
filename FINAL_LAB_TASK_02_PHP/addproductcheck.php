<?php

session_start();

if(isset($_POST['SAVE'])){

    $name 	= $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];


$conn =  mysqli_connect('')
?>