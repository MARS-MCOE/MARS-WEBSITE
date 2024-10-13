<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Validate email (optional but recommended)
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
  }

  // Configure your email settings
  $to = "sumitpatilplk920@gmail.com"; // Replace with your email address
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for your message! We'll get back to you soon.";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
