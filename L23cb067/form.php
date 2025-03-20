<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$first = $_POST['fname'];
$last = $_POST['lname'];
$identity=$_POST['id'];
echo '<h2><i>Welcome dear, '.$last.' . '.$first.'!!<br></i></h2>'; echo '<h3><b>Your Unique ID is: '.$identity.'</b></h3>';
}
?>
