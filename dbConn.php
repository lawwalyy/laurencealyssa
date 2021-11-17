<?php

$db = mysqli_connect("localhost","uspfstudent","1234567","studentdb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>