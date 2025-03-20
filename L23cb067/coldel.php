<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$conditioncolumn = $_POST['lhs'];
$conditionvalue = $_POST['rhs'];
$hostname = 'localhost';
$username = 'root';

$password = '';
$database = 'mydb';
$conn = new mysqli($hostname, $username, $password, $database); if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
}
$sql = "DELETE FROM registration WHERE `$conditioncolumn` = '$conditionvalue'"; if ($conn->query($sql) === TRUE) {
echo "Row Deleted successfully<br>";
} else {
echo "Error updating table: " . $conn->error . "<br>"; }
$conn->close();
}
?>
