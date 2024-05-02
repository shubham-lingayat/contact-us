<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $message = $_POST['message'];
    
    // Format the data
    $contactData = "Name: $name\nEmail: $email\nContact Number: $contact_number\nMessage: $message\n\n";

    // Save the data to a file
    $file = 'contacts.txt';
    file_put_contents($file, $contactData, FILE_APPEND | LOCK_EX);

    // Redirect back to the index page
    header("Location: index.html");
    exit;
}
?>
