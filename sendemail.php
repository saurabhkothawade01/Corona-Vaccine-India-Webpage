<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';
if(isset($_POST['back'])) {
  echo '<script>window.location="index.html"</script>';
}
if(isset($_POST['submit'])){
 $db = new mysqli("localhost", "root", "","cvihelp");
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  // database insert SQL code
  $db->query("INSERT INTO `contact` (`name`,`mail`,`message`) VALUES ('$name', '$email', '$message')");

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'coronavaccineindia2022@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'CoronaVaccine'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('coronavaccineindia2022@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('coronavaccineindia2022@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>1.Name : $name <br>2.Email: $email <br>3.Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! We will get back to you soon.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}

?>
