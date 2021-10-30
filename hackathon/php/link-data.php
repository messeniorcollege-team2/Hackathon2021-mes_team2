<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "portal-data";

$conn= mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$oldaddress = $_POST['oldaddress'];
$newaddress = $_POST['newaddress'];
$phone = $_POST['phone'];
$pincode = $_POST['pincode'];
//For inserting the values to mysql database 
$sql_query = "INSERT INTO tabledata (firstname,lastname,email, oldaddress, newaddress, phone , pincode)
VALUES ('$firstname','$lastname', '$email','$oldaddress', '$newaddress', '$phone', '$pincode')";

if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry inserted successfully !";
}
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>