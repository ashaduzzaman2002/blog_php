<?php 

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'crazy_blog');

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$insert_query = "INSERT INTO contacts (username, email, phone, message ) VALUES ('$username','$email','$phone','$message')";

mysqli_query($con, $insert_query);

header('location: index.php')

?>