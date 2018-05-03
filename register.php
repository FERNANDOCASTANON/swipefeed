<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome To SwipeFeed</title>
    <link rel="stylesheet" href="assets/css/register_style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="assets/js/register.js">

    </script>
  </head>
  <body>
    <?php
    if (isset($_POST['register_button'])) {
      echo "<script>
        $(document).ready(function() {
          $('.first').hide();
          $('.second').show();
        });
      </script>";
    }
     ?>
    <div class="wrapper">
      <div class="login_box">
        <div class="login_header">
          <h1>SwipeFeed</h1>
          Login or Signup below
        </div>

        <div class="first">
          <form class="" action="register.php" method="post">
            <input type="email" name="log_email" placeholder="Email Address" value="<?php
            if(isset($_SESSION['log_email'])) {
              echo $_SESSION['log_email'];
            }
            ?>" required>
            <br>
            <input type="password" name="log_password" placeholder="Password">
            <br>
            <input type="submit" name="login_button" value="Login">
            <br>
            <?php if(in_array("email or passwprd was incorrect<br>", $error_array)) echo "email or passwprd was incorrect<br>"; ?>
            <br>

            <a href="#" id="signup" class="signup">Need an account? Register here!</a>
          </form>
        </div>


        <div class="second">
          <form class="" action="register.php" method="post">
            <input type="text" name="reg_fname" placeholder="First Name" value="<?php
            if(isset($_SESSION['reg_fname'])) {
              echo $_SESSION['reg_fname'];
            }
            ?>" required>
            <br>
            <?php if (in_array("your first name must be between 2 nad 25 characters<br>", $error_array)) {
              echo "your first name must be between 2 nad 25 characters<br>";
            } ?>
            <input type="text" name="reg_lname" placeholder="Last Name" value="<?php
            if(isset($_SESSION['reg_lname'])) {
              echo $_SESSION['reg_lname'];
            }
            ?>" required>
            <br>
            <?php if (in_array("your last name must be between 2 nad 25 characters<br>", $error_array)) {
              echo "your last name must be between 2 nad 25 characters<br>";
            } ?>
            <input type="email" name="reg_email" placeholder="Email" value="<?php
            if(isset($_SESSION['reg_email'])) {
              echo $_SESSION['reg_email'];
            }
            ?>" required>
            <br>
            <input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php
            if(isset($_SESSION['reg_email2'])) {
              echo $_SESSION['reg_email2'];
            }
            ?>" required>
            <br>
            <?php if (in_array("Emails is already in use<br>", $error_array)) {
              echo "Emails is already in use<br>";
            }
            else if (in_array("invalid format<br>", $error_array)) {
              echo "invalid format<br>";
            }
            else if (in_array("Emails dont match<br>", $error_array)) {
              echo "Emails dont match<br>";
            } ?>
            <input type="password" name="reg_password" placeholder="Password" required>
            <br>
            <input type="password" name="reg_password2" placeholder="Confirm Password" required>
            <br>
            <?php if (in_array("your passwords do not match<br>", $error_array)) {
              echo "your passwords do not match<br>";
            }
            else if (in_array("Your password can only contain english characters or numbers<br>", $error_array)) {
              echo "Your password can only contain english characters or numbers<br>";
            }
            else if (in_array("Your password must be between 5 and 30 characters<br>", $error_array)) {
              echo "Your password must be between 5 and 30 characters<br>";
            } ?>
            <input type="submit" name="register_button" value="Register">
            <br>
            <?php if (in_array("<span style='color: #14c800'>You're all set! Go ahead and login!<span><br>", $error_array)) {
              echo "<span style='color: #14c800'>You're all set! Go ahead and login!<span><br>";
            } ?>
            <a href="#" id="signin" class="signin">Already have an account? Sign In here!</a>
          </form>
        </div>

      </div>

    </div>

  </body>
</html>
