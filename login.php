<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!---- <title> Login Form | CodingLab </title>--->
    <link rel="stylesheet" href="login.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
  <div class="main_div">
    <div class="title">Login</div>
    <form action="" method="Post">
      <div class="input_box">
        <input type="text" placeholder="Email" name="user" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box">
        <input type="password" placeholder="Password"  name="pass" required>
        <div class="icon"><i class="fas fa-lock"></i></div>
      </div>
      
      <div class="input_box button">
        <input type="submit" value="Login" name="submit">
      </div>
      <div class="sign_up">
        Not a member? <a href="registration.php">Signup now</a>
      </div>
    </form>
  </div>


  <?php 
  if(isset($_POST["submit"])) {
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];

        $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'cvihelp') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM registration WHERE email='".$user."' AND pass='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['pass'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
    
    /* Redirect browser */  
    header("Location: book.php");
    }  
    }else {
      echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>swal("Invalid username or Password..!");</script>';
    }  
  
} 
}  
?>
  
</body>
</html>
