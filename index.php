<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg+xml" href="./images/devis.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Subscription</title>
</head>

<body>
  <div class="wrapper">
    <div class="icon">
      <i class="far fa-envelope"></i>
    </div>
    <div class="content">
      <header class="header">Become a Subscriber</header>
      <p>Subscribe to our blog and get the latest updates staight your inbox.</p>
    </div>
    <form action="index.php" method="post">
      <?php
      $emailUser = ''; // I Leave it Blank
      if (isset($_POST['subscribe'])) { //if btn subscribe is Clicked
        $emailUser = $_POST['email']; //The User Email(...)
        if (filter_var($emailUser, FILTER_VALIDATE_EMAIL)) { //This condition to validate the userEmail
          $subject = 'Thanks For Subscribing for us -brahimTech';
          $message = "Brahim Tech
          Dear Client
          We are thrilled to welcome you to BrahimTech and express our gratitude for your recent subscription to our platform. Your decision to join us is truly appreciated, and we are committed to providing you with a seamless and rewarding experience.
          As a valued subscriber, you can expect . We are dedicated to continuously enhancing our platform to meet your needs and exceed your expectations.
          Should you have any questions, feedback, or need assistance, please do not hesitate to contact our customer support team. We are here to ensure that you make the most of your subscription and have a positive journey with us.
          Once again, thank you for choosing brahimTech. We look forward to serving you and building a long-lasting and mutually beneficial relationship.
          Warm regards,
          brahimTech
          Leader
          ibrahim.elmliji01@gmail.com This letter is a professional and personalized way to express gratitude to the client for subscribing to your platform. It acknowledges the client's decision and emphasizes the company's commitment to providing a valuable experience. The letter also encourages the client to reach out for support, reinforcing a customer-centric approach.";
          $sender = "From: ibrahim.elmliji01@gmail.com";
          if (mail($emailUser, $subject, $message, $sender)) {
            ?>
              <div class="alert-succes">Thank you</div>
            <?php
            $emailUser = '';
          } else {
            ?>
                <div class="alert-error">Failed while sening your Email</div>
            <?php
          }
        } else {
            ?>
                <div class="alert-error">Invalid Email</div>
            <?php
        }
      }
      ?>
      <div class="field">
        <input type="text" placeholder="Email Adress" required name="email" value="<?php $emailUser ?>" />
      </div>
      <div class="field-btn">
        <input type="submit" value="Subscribe" class="subscribe" name="subscribe" />
      </div>
    </form>
    <div class="text">We do not share your informations.</div>
  </div>
</body>

</html>