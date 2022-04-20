<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$query= "DELETE FROM `myguests`WHERE `id`=$id";
$result = mysqli_query($connect,$query);

if($result)
{
	echo 'Data Deleted';
}else {
	echo 'Data Not Deleted';
}
mysqli_close($connect);
}

$conn->close();
?>
