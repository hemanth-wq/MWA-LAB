<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'MWA';
$conn = new mysqli($hostname, $username, $password, $database); if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
}
$sql = "UPDATE Details SET marks = '72' WHERE Name = 'Pujitha'"; if ($conn->query($sql) === TRUE) {
echo "Table updated successfully<br>";
} else {
echo "Error updating table: " . $conn->error . "<br>";
}
?>
