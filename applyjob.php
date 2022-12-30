<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Job Portal</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/applyjob.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light" id="header-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Online Job Portal</a>
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
              <a class="nav-link active" href="applyjob.php">Apply</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="joblist.html">Job List</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <form action="applyjob.php" method="POST">
    <div style="text-align: center;">
        <header>
            <h1><b><u>Apply for Job</u></b></h1><br>
                <h4 style="color: rgb(21, 53, 231);">
                    * PLEASE COMPLETE ALL SECTIONS REGARDLESS OF WEATHER A CURRICULUM VITAE IS SUBMITTED
                </h4>
        </header>
    </div><br>
    <div class="jobform" style="padding-left:20%; margin-right: 80px; margin-left: 80px; border: black; border-width: 2px; border-style: solid;">
        <div>
            <p style="padding-left: 23%; font-size: large; font-family: Arial, Helvetica, sans-serif;">Please
                Complete in Black Ink or Typescript</p>
        </div><br>
        <div>
            <lebel style="padding-left:23%; font-family: Arial, Helvetica, sans-serif; font-size: 115%;">Post Applied
                For :</lebel>
            <select name="postapplied" style="font-size: 100%;">
                <option type="text" value="Software Engineer">Software Engineer</option>
                <option type="text" value="Web Developer">Web Developer</option>
                <option type="text" value="Data Scientist">Data Scientist</option>
                <option type="text" value="Project Engineer">Project Engineer</option>
                <option type="text" value="Machine Learning Engineer">Machine Learning Engineer</option>
                <option type="text" value="Accounts Officer">Accounts Officer</option>
                <option type="text" value="Account Manager">Account Manager</option>
                <option type="text" value="Accountant">Accountant</option>
                <option type="text" value="Finance Assistance">Finance Assistance</option>
            </select>
        </div><br>
        <div>
            <p style="font-size: 200%; font-family: Arial, Helvetica, sans-serif;"><b>Personal
                    Details :</b></p>
        </div>
        <div style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>FullName :</lebel>
            <input type="text" name="fullname"placeholder="Enter the Name">
        </div><br>
        <div style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Father's name :</lebel>
            <input type="text" name="fathersname">
            <lebel style="padding-left: 2%;">Mother's name :</lebel>
            <input type="text" name="mothersname">
        </div><br>
        <div style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Permanent Address :</lebel><br>
            <textarea style="height: 80px; width: 59%; margin-left: 180px;" type="text" name="permanentaddress"></textarea>
        </div>
        <div style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Postal Code :</lebel>
            <input type="number" name="postalcode">
            <lebel style="padding-left: 2%;">City :</lebel>
            <input type="text" name="city">
        </div><br>
        <div  style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Country :</lebel>
            <input type="text" name="country">
        </div><br>
        <div style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Email :</lebel>
            <input type="text" name="email" type="email" id="email">
        </div><br>
        <div style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Mobile :</lebel>
            <input type="phone" name="mobile" type="tel" id="phone">
            <lebel  style="padding-left: 2%;">Home Telephone :</lebel>
            <input type="phone" name="hometelephone" type="tel" id="phone">
        </div><br>
        <div style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>National Id Number :</lebel>
            <input type="number" name="nationalidnumber" id="phone">
            <lebel style="padding-left: 3%;">Date of Birth:</lebel>
            <input type="date" name="dateofbirth" value="dateofbirth">
        </div><br>
        <div>
            <p style="font-size: 200%; font-family: Arial, Helvetica, sans-serif;"><b>Possition Information :</b></p>
        </div>
        <div class="form check" style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Hours :</lebel>
            <input  name="hours" class="form-check-input" value="fulltime" type="radio">
            <label class="form-check-label" for="flexRadioDefault1">
                Full Time
            </label>
            <input  name="hours" class="form-check-input" value="parttime" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Part Time
            </label>
            <input  name="hours" class="form-check-input" value="internship" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Internship
            </label>
        </div><br>
        <div class="form check" style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Job Level :</lebel>
            <input  name="joblevel" class="form-check-input" value="entrylevel" type="radio">
            <label class="form-check-label" for="flexRadioDefault1">
                Entry Level
            </label>
            <input  name="joblevel" class="form-check-input" value="midmanager" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Mid Manager
            </label>
            <input  name="joblevel" class="form-check-input" value="senior" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Senior
            </label>
        </div><br>
        <div class="form check" style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Education Level :</lebel>
            <input  name="educationlevel" class="form-check-input" value="primaryeducation" type="radio">
            <label class="form-check-label" for="flexRadioDefault1">
                Primary Education
            </label>
            <input  name="educationlevel" class="form-check-input" value="secondaryeducation" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Secondary Education
            </label>
            <input  name="educationlevel" class="form-check-input" value="bachelordegree" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Bachelor Degree
            </label>
            <input  name="educationlevel" class="form-check-input" value="masterdegree" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Master Degree
            </label>
        </div><br>
        <div class="form check" style="font-family: Arial, Helvetica, sans-serif;font-size: 120%;">
            <lebel>Location :</lebel>
            <input  name="location" class="form-check-input" value="remote" type="radio">
            <label class="form-check-label" for="flexRadioDefault1">
                Remote
            </label>
            <input  name="location" class="form-check-input" value="dhaka" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Dhaka
            </label>
            <input  name="location" class="form-check-input" value="chittagong" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Chittagong
            </label>
            <input  name="location" class="form-check-input" value="comilla" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Comilla
            </label>
            <input  name="location" class="form-check-input" value="sylhet" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Sylhet
            </label>
            <input  name="location" class="form-check-input" value="barishal" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Barishal
            </label>
            <input  name="location" class="form-check-input" value="khulna" type="radio">
            <label class="form-check-label" for="flexRadioDefault2">
                Khulna
            </label>
        </div><br>
        <div>
            <label>Upload Your CV :</label>
            <input type="file" name="cv" id="image">
        </div>
        <div style="padding-left: 35%;">
            <input style="background-color: blue; color: white; width: 15%; height: 5%; " type="submit" name="save"
                value="Submit">
        </div><br>
    </div><br>
</form>
  <script src="js/jquery-3.6.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>

<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="applyjob";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(isset($_POST['save']))
{
    $postapplied=$_POST['postapplied'];
    $fullname=$_POST['fullname'];
    $fathersname=$_POST['fathersname'];
    $mothersname=$_POST['mothersname'];
    $permanentaddress=$_POST['permanentaddress'];
    $postalcode=$_POST['postalcode'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $hometelephone=$_POST['hometelephone'];
    $nationalidnumber=$_POST['nationalidnumber'];
    $dateofbirth=$_POST['dateofbirth'];
    $hours=$_POST['hours'];
    $joblevel=$_POST['joblevel'];
    $educationlevel=$_POST['educationlevel'];
    $location=$_POST['location'];
    $cv=$_POST['cv'];

    $sql_query="INSERT INTO apply(postapplied,fullname,fathersname,mothersname,permanentaddress,postalcode,city,country,email,mobile,hometelephone,nationalidnumber,dateofbirth,hours,joblevel,educationlevel,location,cv)
     VALUES('$postapplied','$fullname','$fathersname','$mothersname','$permanentaddress','$postalcode','$city','$country','$email','$mobile','$hometelephone','$nationalidnumber','$dateofbirth','$hours','$joblevel','$educationlevel','$location','$cv')";
     
     if(mysqli_query($conn,$sql_query))
     {
        echo ' <script type="text/javascript"> alert("inserted successfully")</script> ' ;
     }
     else
     {
        echo ' <script type="text/javascript"> alert("not inserted successfully")</script> ' ;
     }
}
?>