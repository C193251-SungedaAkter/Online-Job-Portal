<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Job Portal</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>

<body style="background: linear-gradient(135deg, #71b7e6, #9b59b6);">
  <header>
    <nav class="navbar navbar-expand-lg bg-light" id="header-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Onlne Job Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="login-wrapper">
    <form action="login.php" class="form" method="POST">
      <img src="img/avatar.png" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="username" id="username" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" required>
        <label for="loginPassword">Password</label>
      </div>
      
      <button class="btn btn-success" name="submit">Login</button>
      <p class="message">Not Registered?<a href="register.html">Register</a></p>
    </form>
  </div>
  <script src="js/jquery-3.6.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>


<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="register";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(isset($_POST['submit']))
{
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if(!empty($username) && !empty($password)){
        $sql = "SELECT * FROM information WHERE username = '$username' AND password = '$password'";
        $query = $conn->query($sql);

        if($query->num_rows > 0){
            header('location:joblist.html');
        }
        else{
            echo ' <script type="text/javascript"> alert("Not Registered Yet !!")</script> ' ;
        }
    }
}

?>