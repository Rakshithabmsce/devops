<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$usn = $_POST['usn'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql="INSERT INTO `users` (`name`, `usn`, `email`, `password`) VALUES ('$name','$usn','$email', '$password')"; 
if(mysqli_query($conn,$sql))
{echo"YOU HAVE SUCCESSFULL SIGNED UP";
}
else{
echo"error:". $sql ."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>