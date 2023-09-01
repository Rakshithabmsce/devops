<?php
// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
//Retrieve user input from a signup form
$name = $_POST['name'];   
$password = $_POST['password'];

// Prepare and execute an SQL statement to insert the user data
$stmt = $conn->prepare("select * from users where password='?'");
$stmt->bind_param("s",$password);
$stmt->execute();
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows>0)
{
    $data=$stmt_result->fetch_assoc();
 if($data['password']===$password)
   { 
    echo"success";
   }else
   {
     echo"<h2>invalid usn or password</h2>";
   } 
}
$stmt->close();
$conn->close();
?>		