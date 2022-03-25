<link rel="stylesheet" href="index_style.css">
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
  
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="Healthcare.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title"><i class="fas fa-heartbeat"></i>Healthcare Q&A</div>
    <div class="content">
      <form action="" method="Post">
        <div class="cough-details">
          <input type="radio" name="cough" id="dot-1" value="Yes">
          <input type="radio" name="cough" id="dot-2" value="No">
          <span class="head-title">1.Do you have cough ?</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="cough">Yes</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="cough">No</span>
          </label>
          </div>
        </div>
        <div class="head-details">
            <input type="radio" name="head" id="dot-3" value="Yes">
            <input type="radio" name="head" id="dot-4" value="No">
            <span class="head-title">2.Do you have Headache ?</span>
            <div class="category">
              <label for="dot-3">
              <span class="dot three"></span>
              <span class="head">Yes</span>
            </label>
            <label for="dot-4">
              <span class="dot four"></span>
              <span class="head">No</span>
            </label>
            </div>
          </div>
          <div class="cold-details">
            <input type="radio" name="cold" id="dot-5" value="Yes">
            <input type="radio" name="cold" id="dot-6" value="No">
            <span class="head-title">3.Do you have Cold ?</span>
            <div class="category">
              <label for="dot-5">
              <span class="dot five"></span>
              <span class="cold">Yes</span>
            </label>
            <label for="dot-6">
              <span class="dot six"></span>
              <span class="cold">No</span>
            </label>
            </div>
          </div>
          <div class="fever-details">
            <input type="radio" name="fever" id="dot-7" value="Yes">
            <input type="radio" name="fever" id="dot-8" value="No">
            <span class="head-title">4.Do you have fever ?</span>
            <div class="category">
              <label for="dot-7">
              <span class="dot seven"></span>
              <span class="fever">Yes</span>
            </label>
            <label for="dot-8">
              <span class="dot eight"></span>
              <span class="fever">No</span>
            </label>
            </div>
          </div>
          <div class="breath-details">
            <input type="radio" name="breath" id="dot-9" value="Yes">
            <input type="radio" name="breath" id="dot-10" value="No">
            <span class="head-title">5.Do you find difficulty in breathing or Shortness of breathing ?</span>
            <div class="category">
              <label for="dot-9">
              <span class="dot nine"></span>
              <span class="breath">Yes</span>
            </label>
            <label for="dot-10">
              <span class="dot ten"></span>
              <span class="breath">No</span>
            </label>
            </div>
          </div>
          <div class="chest-details">
            <input type="radio" name="chest" id="dot-11" value="Yes">
            <input type="radio" name="chest" id="dot-12" value="No">
            <span class="head-title">6.Do you feel pain in chest ?</span>
            <div class="category">
              <label for="dot-11">
              <span class="dot eleven"></span>
              <span class="chest">Yes</span>
            </label>
            <label for="dot-12">
              <span class="dot twelve"></span>
              <span class="chest">No</span>
            </label>
            </div>
          </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
        <div class="button">
         <input type="submit" value="Back" name="back">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<?php

if(isset($_POST["submit"])) {

$cough = $_POST['cough'];
$head = $_POST['head'];
$cold = $_POST['cold'];
$fever = $_POST['fever'];
$breath = $_POST['breath'];
$chest = $_POST['chest'];


if ($cough == 'Yes' && $head == 'Yes' && $cold == 'Yes' && $fever == 'Yes' && $breath == 'Yes' && $chest == 'Yes') {
  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>swal({
    title: "Please visit a Doctor",
    text: "Stay Home , Stay Safe!",
    icon: "warning",
    button: true,
    dangerMode: true,
  })</script>';
}
elseif ($cough == 'No' && $head == 'No' && $cold == 'No' && $fever == 'No' && $breath == 'No' && $chest == 'No') {
  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>swal("You are Healthy!", "You can book a slot!", "success")</script>';
}
else {
  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>swal({
    title: "You need to Take care",
    text: "Once you are healthy, you can book a slot for you!",
    icon: "warning",
    button: true,
    dangerMode: true,
  })</script>';
}
}
else if(isset($_POST["back"])) {
  echo '<script>window.location="index.html"</script>';
}
?>