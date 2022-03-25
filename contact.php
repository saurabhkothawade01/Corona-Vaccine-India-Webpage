<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>4671 camp road,Owatone</div>
        <div><i class="fas fa-envelope"></i>CoronaVaccineIndia2022@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91 9811557085</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" >
          <input type="email" name="email" class="text-box" placeholder="Your Email" >
          <textarea name="message" rows="5" placeholder="Your Message" ></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
          <a href="index.html"><input type="submit" name="back" class="back-btn" value="Back"></a>
        </form>
      </div>
    </div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
  </body>
</html>