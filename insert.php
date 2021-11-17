<?php
include "dbConn.php";

if(isset($_POST['submit']))
{		
    $Student_ID_Number = $_POST['Student ID Number'];
    $Student_Family_Name = $_POST['Student Family Name'];
    $Student_First_Name = $_POST['Student First Name'];
    $Student_Middle_Name = $_POST['Student Middle Name'];
    $Student_Email_Address = $_POST['Student Email Address'];
    $Student_Home_Address = $_POST['Student Home Address'];
    $Student_Mobile_Number = $_POST['Student Mobile Number'];
    $Student_Course = $_POST['Student Course'];

    $insert = mysqli_query($db,"INSERT INTO `tblemp`(`Student ID Number`, `Student Family Name`, `Student First Name`, `Student Middle Name`, `Student Email Address`, `Student Home Address`, `Student Mobile Number`, `Student Course`,) VALUES ('$Student ID Number','$Student Family Name', '$Student First Name', '$Student Middle Name', '$Student Email Address', '$Student Home Address', '$Student Mobile Number', '$Student Course')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db);
?>
