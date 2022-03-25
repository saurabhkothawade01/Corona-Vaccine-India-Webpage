<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!---<title> Responsive Registration Form | CodingLab </title>--->
  <link rel="stylesheet" href="registration_css.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form name="regi" method="Post" action="">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="fname" id="fname">
          </div>
          <div class="input-box">
            <span class="details">DOB</span>
            <input type="date" required name="dob" id="dob">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" required name="mail" id="mail">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" required name="mno" id="mno">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required name="pass" id="pass">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required name="cpass" id="cpass">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Male">
          <input type="radio" name="gender" id="dot-2" value="Female">
          <input type="radio" name="gender" id="dot-3" value="Prefer not to say">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>

  <?php

if(isset($_POST["submit"])) {
  $con = mysqli_connect('localhost', 'root', '','cvihelp');

  // get the post records
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$mail = $_POST['mail'];
$mno = $_POST['mno'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$gender = $_POST['gender'];

// database insert SQL code
if ($pass === $cpass) {

  $sql = "INSERT INTO `registration` (`name`, `DOB`, `email`, `mob`, `pass`, `con_pass`, `gender`) VALUES ('$fname', '$dob', '$mail', '$mno', '$pass', '$cpass', '$gender')";
  $rs = mysqli_query($con, $sql);
  if($rs)
{
	echo '<script>window.location="login.php"</script>';
}


}
else {
  
  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>swal("Password Don\'t Match");</script>';



}

}

?>

</body>

</html>









 


