<?php
$hostname='localhost';
$username='root';
$password='';
$database='MWA';
$conn=new mysqli($hostname,$username,$password,$database); if($conn->connect_error){

die('connection failed'.$conn->connect_error);
}
$sql = "insert into Details (Name,Email,Nptelcourse,Marks) values ('Surekha','aresurekha2003@gmail.com','IIOT','68'),
('Pujitha', 'PujithaBandla@gmail.com', 'IIOT','65'), ('Saranya','saranya12116@gmail.com','IIOT','75'), ('Mohana','chereddymohana@gmail.com','IIOT','73'), ('Akhila','Akhilachowdary2003@gmail.com','IIOT','77'), ('Mohana','chereddymohana@gmail.com','PDSA','69'), ('Surekha','aresurekha2003@gmail.com','PDSA','55')";
$query=mysqli_query($conn,$sql); if($query) {
echo 'Details are inserted successfully';
} else {
echo "Error creating table: " . $conn->error;
}
?>
