<?php
$hostName = "localhost";
$userName = "root";
$password = "";
// Create connection
$conn = mysqli_connect('localhost', 'root', '');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo 'Connected successfully';
mysqli_close($conn);
?>
