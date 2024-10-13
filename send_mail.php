<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Email subject and body
  $subject = "New Contact Form Submission from $name";
  $body = "You have received a new message from your website contact form.\n\n".
          "Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

  // Email headers
  $headers = "From: $email";

  // Send email
  $to = "your-email@example.com"; // Replace with your email address
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }
} else {
  // Redirect to form if accessed directly
  header('Location: index.html');
  exit();
}
?>
