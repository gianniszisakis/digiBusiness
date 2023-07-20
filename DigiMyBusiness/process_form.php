<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $businessName = $_POST["businessName"];
    $comments = $_POST["comments"];

    // Here, you can add code to validate and sanitize the form data if needed

    // Send the email (Example using mail function)
    $to = "giannis.zisakis@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nBusiness Name: $businessName\nComments:\n$comments";

    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
