<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $secretKey = "YOUR_SECRET_KEY";
  $responseKey = $_POST['g-recaptcha-response'];
  $userIP = $_SERVER['REMOTE_ADDR'];

  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

  $response = file_get_contents($url);
  $response = json_decode($response);

  if ($response->success) {
    // Process the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Do something with the form data, like sending an email

    echo "Your message has been sent successfully!";
  } else {
    echo "reCAPTCHA verification failed. Please try again.";
  }
} else {
  echo "Invalid request method.";
}
?>
