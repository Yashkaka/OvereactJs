<?php
include 'database.php';

$vegname=$_POST['vegname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$message=$_POST['message'];

$sql="INSERT INTO users('vegname', 'quantity', 'price', 'message') VALUES ('$vegname', '$quantity' , ''$price',  '$message')";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ./contact.php');
}

?>