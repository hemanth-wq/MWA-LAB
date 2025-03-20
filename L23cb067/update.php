<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$columnname = $_POST['field'];
$newvalue = $_POST['value'];
$conditioncolumn = $_POST['lhs'];
$conditionvalue = $_POST['rhs'];
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb';
$conn = new mysqli($hostname, $username, $password, $database); if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);}
$sql = "UPDATE registration SET `$columnname` = '$newvalue' WHERE `$conditioncolumn` = '$conditionvalue'";
if ($conn->query($sql) === TRUE) {
echo "Table updated successfully<br>";
} else {
echo "Error updating table: " . $conn->error . "<br>"; }
$conn->close();
}
?>
