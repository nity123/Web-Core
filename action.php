<?php
include 'database.php';

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$message=$_POST['message'];

$sql="INSERT INTO users(firstName,lastName, email, contact, address) VALUES
 ('$firstName','$lastName','$email','$contact','$address')";

$result=mysqli_query($conn, $sql);
$sql="INSERT INTO admin(firstName,lastName, email, contact, address, message) VALUES 
('$firstName','$lastName','$email','$contact','$address','$message')";
$result=mysqli_query($conn, $sql);
if($result){
    header('Location: ./contact.html');
}

?>