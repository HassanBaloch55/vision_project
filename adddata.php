<?php

//Create connection
include 'connect.php';
// Get data from form submission
$id     =   $_POST['Id'];
$fname   =   $_POST['FirstName'];
$lname =    $_POST['LastName'];
$City  =   $_POST['City'];
$Email =   $_POST['Email'];
$Password =    $_POST['Password'];
$ConfirmPassword =    $_POST['Confirm_Password'];


// Prepare and execute SQL statement to insert data
$sql = "insert into Register values ('$id','$fname','$lname','$City','$Email','$Password','$ConfirmPassword')";
 // $select= "select * from student";
$result = mysqli_query($conn,$sql);
 // Set Condition
if  ($result == true){
    header('location:index2.php');
}
 else {
    echo "Connection Failed";
 }

?>