<?php
if (isset($_POST['submit'])) {
$fileName = $_FILES['fileToUpload']['name'];
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); if (!in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
echo "File type is not supported."; return;
}
$targetDir = 'uploads/';
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetDir . $fileName); echo '<img src="' . $targetDir . $fileName . '">';
}
?>
