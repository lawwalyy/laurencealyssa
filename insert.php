<?php
include "dbConn.php"; 

if(isset($_POST['submit']))
{		
    $Student_ID_Number = $_POST['ID_Number'];
    $Student_Family_Name = $_POST['Family_Name'];
    $Student_First_Name = $_POST['First_Name'];
    $Student_Middle_Name = $_POST['Middle_Name'];
    $Student_Email_Address = $_POST['Email_Address'];
    $Student_Home_Address = $_POST['Home_Address'];
    $Student_Mobile_Number = $_POST['Mobile_Number'];
    $Student_Course = $_POST['Course'];

    $insert = mysql_query($db "INSERT INTO `tblemp`(`ID_Number`, `Family_Name`, `First_Name`, `Middle_Name`, `Email_Address`, `Home_Address`, `Mobile_Number`, `Course`,) VALUES ('ID_Number','Family_Name', 'First_Name', 'Middle_Name', 'Email_Address', 'Home_Address', 'Mobile_Number', 'Course')");

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
