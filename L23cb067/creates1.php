<?php
$hostname='localhost';
$username='root';
$password='';
$database='MWA';
$conn=new mysqli($hostname,$username,$password,$database); if($conn->connect_error){
die('connection failed'.$conn->connect_error);
}
$sql = "CREATE TABLE DETAILS( Name VARCHAR(30),
Email VARCHAR(30),
Nptelcourse VARCHAR(50), Marks VARCHAR(10))";

if ($conn->query($sql) === TRUE) { echo "Table created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
