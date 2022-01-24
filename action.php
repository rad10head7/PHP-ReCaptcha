<?php
  session_start();
  require 'config.php';

  if(isset($_POST['status']) && isset($_POST['status']) == 'check') {

    if(isset($_POST['captcha_challenge']) && $_POST['captcha_challenge'] === $_SESSION['captcha_text']) {

      if (isset($_POST['name']) && !empty($_POST['name'])) {
        $init_name = $conn->real_escape_string(strip_tags($_POST['name']));
        $name = trim($init_name);
      }

      if (isset($_POST['email']) && !empty($_POST['email'])) {
        $init_email = $conn->real_escape_string(strip_tags($_POST['email']));
        $email = trim($init_email);
      }

      $data = '';

      $data .= '<div class="text-center">
                  <h1>Thank You ' . $name . '!</h1>
                  <h1>Your EMAIL is ' . $email . '</h1>
                </div>';

      echo $data;
    }
  }
?>
