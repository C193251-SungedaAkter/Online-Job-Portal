<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="register";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];

    if($password === $confirmpassword)
    {
        $sql_query = "INSERT INTO information(fullname,username,email,phonenumber,password,confirmpassword,gender)
        VALUES('$fullname','$username','$email','$phonenumber','$password','$confirmpassword','$gender')";

         if(mysqli_query($conn,$sql_query))
            {
               header('location:login.php?loginsuccess');
            }
    }
    else
      {
         echo "Password is not Same!" ;
      }
         mysqli_close($conn);
}

?>