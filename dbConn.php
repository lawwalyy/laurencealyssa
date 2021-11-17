<?php
$hostName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect('localhost', 'root', '');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo 'Connected successfully';
mysqli_close($conn);
?>
