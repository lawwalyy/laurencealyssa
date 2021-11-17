<?php
include 'dbConn.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>