<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$uname = $_POST['Name'];
$pass = $_POST['Pass'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb';
$conn = new mysqli($hostname, $username, $password, $database); if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error); }
$sql = "INSERT INTO registration VALUES ('$uname','$pass','$mail','$phone')"; if ($conn->query($sql) === TRUE) {
echo '<h2>Welcome dear '.$uname.'!!<br></h2>';
echo '<h3><b><i><a href="main.html">Go To Home Page</a></i></b></h3>';
} else {
echo "Error inserting data: " . $conn->error . "<br>"; }
$conn->close();
}
?>
