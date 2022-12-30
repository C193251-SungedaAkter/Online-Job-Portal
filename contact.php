<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="contactus";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobilenumber = $_POST['mobilenumber'];
    $emailaddress = $_POST['emailaddress'];
    $message = $_POST['message'];

    $sql_query="INSERT INTO contact(firstname,lastname,mobilenumber,emailaddress,message)
     VALUES('$firstname','$lastname','$mobilenumber','$emailaddress','$message')";
     
     if(mysqli_query($conn,$sql_query))
     {
        header('location: contact.html');
     }
     else
     {
        echo "ERROR:" . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>