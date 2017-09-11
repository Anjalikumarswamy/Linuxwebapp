<?php
$servername = "anjalidb.mysql.database.azure.com";
$username = "anjalidb@anjalidb";
$password = "LSsetup1!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user_name=$_POST["user"];
$password=$_POST["pass"];

$sql = "SELECT user, pass FROM test_users.my_users WHERE user= '".$user_name."' AND pass= '".$password."'";
$result = $conn->query($sql);
$num=$result->num_rows;
echo $num==0?"Invalid User ID or Password":"Welcome ".$user_name."!";
?>