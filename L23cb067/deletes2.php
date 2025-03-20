<?php
$hostname='localhost';
$username='root';
$password='';
$database="MWA";
$conn=new mysqli($hostname,$username,$password,$database); if($conn->connect_error){
die('connection failed'.$conn->connect_error);
}
$sql="DELETE FROM Details WHERE Name='Akhila'"; if ($conn->query($sql) === TRUE) {
echo "Deleted successfully<br>";
} else {
echo "Error creating table: " . $conn->error . "<br>";
}
?>
