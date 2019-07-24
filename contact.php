<?php

if ($_POST) {

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $fname = test_input($_POST['firstname']);
  $lname = test_input($_POST['lastname']);
  $email = test_input($_POST['email']);
  $message = test_input($_POST['message']);
  $messagebody = 'You have a new message from: ' . $fname . ' ' . $lname . PHP_EOL . 'Email: ' . $email . PHP_EOL . 'Message:' . PHP_EOL . $message;
  $subject = 'The website contact form has been submitted';
  $to = '';
  $headers = 'From: donotreply@fortedata.com';

  if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
    $formerr = 'Form submission not valid due to first name.';
    $formstyle = 'fail';
  }
  elseif (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
    $formerr = 'Form submission not valid due to last name.';
    $formstyle = 'fail';
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $formerr = 'Form submission not valid due to email.';
    $formstyle = 'fail';
  } else {

    if(mail($to, $subject, $messagebody, $headers)) {
      mail($to, $subject, $messagebody, $headers);
    $formerr = 'Thank you for your submission! We will get back to you as quickly as possible.';
    $formstyle = 'success';
    } else {
    };

  }



}


?>




<!DOCTYPE html>
<html>


  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact</title>
    <meta name="author" content="name">
    <meta name="description" content="Forté Data Systems provides valuable technology solutions to the automotive extended service contract industry.">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ef49b27969.js"></script>
  </head>

  <body>

    <img class="top-image" src="images/top-bar-graphic.png" />

    <nav>

      <img src="images/forte-logo.png" />
      <div class="reg-nav">
        <ul>
          <li>
            <a href="index.html">
              Home
            </a>
          </li>
          <span>|</span>
          <li>
            <a href="index.html#company">
              Company
            </a>
          </li>
          <span>|</span>
          <li class="dropdown">
            <a href="index.html#solutions">
              Solutions
            </a>
          </li>
          <span>|</span>
          <li>
            <a href="contact.php">
              Contact
            </a>
          </li>
          <span>|</span>
          <li>
            <a href="downloads.html">
              Downloads
            </a>
          </li>
          <span>|</span>
          <li>
            <a href="index.html#portal">
              Login
            </a>
          </li>

        </ul>
      </div>
      <div class="hamburger">
        <div class="hamburgler">
          <span></span>
        </div>
      </div>
      <div class="mobile-nav">
        <ul>

          <a href="index.html">
            <li>Home</li>
          </a>
          <a href="index.html#company">
            <li>Company</li>
          </a>
          <a href="index.html#solutions">
            <li>Solutions</li>
          </a>
          <a href="contact.php">
            <li>Contact</li>
          </a>
          <a href="downloads.html">
            <li>Downloads</li>
          </a>
          <a href="index.html#portal">
            <li>Login</li>
          </a>

        </ul>
      </div>

    </nav>

  <div id='map'>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.5166176362163!2d-84.16593958444756!3d34.08190362361315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5996ab3d1c467%3A0x1552798548f40f82!2s3330+Paddocks+Pkwy%2C+Suwanee%2C+GA+30024!5e0!3m2!1sen!2sus!4v1561331527167!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>

    <h2 class="<?php echo $formstyle; ?>" ><?php echo $formerr; ?></h2>

  <section id='contact-form'>

    <div class="information">

      <table>
        <tr>
          <th></th>
        <th>Corporate Headquarters</th>
      </tr>
        <tr>
          <td>
            <i class="fas fa-map-marker-alt" style="color: var(--main-blue);" ></i>
          </td>
          <td>
            3330 Paddocks Parkway<br>Johns Creek, GA 30024
          </td>
        </tr>
        <tr>
          <td>
        <i class="fas fa-envelope" style="color: var(--main-blue);" ></i>
      </td>
      <td>
        General Information <a href="mailto:info@fortedata.com">info@fortedata.com</a>
      </td>
    </tr>
        <tr>
          <td>
        <i class="fas fa-envelope" style="color: var(--main-blue);" ></i>
      </td>
        <td>
        Product Support <a href="mailto:support@fortedata.com">support@fortedata.com</a>
      </td>
    </tr>
    <tr>
      <td class='contacticon'>
        <i class="fas fa-envelope" style="color: var(--main-blue);" ></i>
      </td>
      <td>
        Media Inquiries <a href="mailto:media@fortedata.com">media@fortedata.com</a>
      </td>
    </tr>
    <tr>
      <td class='contacticon'>
        <i class="fas fa-phone-alt" style="color: var(--main-blue);" ></i>
      </td>
      <td>
        <a href="tel:8005718702">800 571 8702</a>
      </td>
    </tr>
    <tr>
      <td class='contacticon'>
        <i class="fas fa-phone-alt" style="color: var(--main-blue);" ></i>
      </td>
      <td>
        <a href="tel:6782080206">678 208 0206</a>
      </td>
    </tr>
    <tr>
      <td class='contacticon'>
        <i class="fas fa-globe-americas" style="color: var(--main-blue);" ></i>
      </td>
      <td>
        <a href="http://www.fortedata.com">http://www.fortedata.com</a>
      </td>
    </tr>
        <tr>
          <td class='contacticon'>
        <i class="fas fa-angle-down" style="text-align: center; color: var(--main-blue);" ></i>
      </td>
        <td>
        <a href="http://support.fortedata.com">http://support.fortedata.com</a>
      </td>
      <tr>
      </table>

    </div>

    <form class="contact-form" action="contact.php" method="post">
      <h3>Please fill out the form below to contact us.</h3>

      <label for="firstname">First Name</label>

      <input type="text" name="firstname" value="" required>

      <label for="lastname">Last Name</label>

      <input type="text" name="lastname" value="" required>

      <label for="email">Email</label>

      <input type="text" name="email" value="" required>

      <label for="message">Message</label>

      <textarea name="message"></textarea required>

      <input type="submit" name="submit" value="Submit">

    </form>

  </section>

    <footer>

      <div>
      <ul>
        <li>3330 Paddocks Parkway,</li>
        <li>Johns Creek GA 30024</li>
        <li><a href="mailto:sales@fortedata.com">sales@fortedata.com</a></li>
        <li><a href="https://www.fortedata.com">www.fortedata.com</a></li>
        <li><a href="tel:8005718702">800-571-8702</a></li>
      </ul>
    </div>

      <div class="mobile-apps">
        <div>
        <h5>Our Mobile Apps</h5><br>
          <img src="images/footer-1.png" alt="Repair ID" onclick="openRepair()">
          <img src="images/footer-2.png" alt="Numbers" onclick="openNumbers()">
          <img src="images/footer-3.png" alt="Providers" onclick="openProviders()">
        </div>
      </div>

      <div class="repair-options" onclick="closeIt()">

        <img src="images/ioslogo.png" alt="iPhone" onclick="parent.location.href='https://itunes.apple.com/us/app/fortenumbers/id763539491?mt=8'">

        <img src="images/androidicon.png" alt="Android" onclick="parent.location.href='https://play.google.com/store/apps/details?id=com.fds.android.repairid'">

      </div>

      <div class="numbers-options" onclick="closeIt()">

        <img src="images/ioslogo.png" alt="iPhone" onclick="parent.location.href='https://itunes.apple.com/us/app/fortenumbers/id763539491?mt=8'">

        <img src="images/androidicon.png" alt="Android" onclick="parent.location.href='https://play.google.com/store/apps/details?id=com.fds.numbers'">

      </div>

      <div class="providers-options" onclick="closeIt()">

        <img src="images/ioslogo.png" alt="iPhone" onclick="parent.location.href='https://itunes.apple.com/us/app/providers/id747426884?mt=8'">

        <img src="images/androidicon.png" alt="Android" onclick="parent.location.href='https://play.google.com/store/apps/details?id=com.fds.providers'">

      </div>

      <script type="text/javascript">
          function openRepair() {
            document.querySelector('.repair-options').style.display = 'flex';
          }

          function openNumbers() {
            document.querySelector('.numbers-options').style.display = 'flex';
          }

          function openProviders() {
            document.querySelector('.providers-options').style.display = 'flex';
          }

          function closeIt() {
            document.querySelector('.repair-options').style.display = 'none';
            document.querySelector('.numbers-options').style.display = 'none';
            document.querySelector('.providers-options').style.display = 'none';
          }

      </script>

      <div>

        <h5>Download GoForté</h5><br>
        <a href="https://www.fortedata.com/newForte/installation.html"><img src="images/footer-5.png" style="max-height: 73px;" alt="goforte"></a>

      </div>

    </footer>
  <div class="footer-bottom">
    <a href="https://www.facebook.com/fortedatasystems/" ><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.fortedata.com%2Fcompany%2Findex.php&region=follow_link&screen_name=goforte&tw_p=followbutton&variant=2.0" ><i class="fab fa-twitter"></i></a>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/script.js"></script>
  <script src="https://kit.fontawesome.com/ef49b27969.js"></script>
</body>

</html>
