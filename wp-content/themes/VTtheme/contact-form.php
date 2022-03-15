<?php
include 'connection.php';

$query = $conn->query("Select * From wp_users"); //Local Environment`
print $query;

$timestamp = date('Y-m-d H:i:s');
$name = $email = $subject = $message = "";
$returnLocation = 'Location: /contact.php#contact-form';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $_SESSION['post-data'] = $_POST;
}

//attempt insertion
try{
    $query = $conn->query("INSERT INTO contact_form_data (name, email, subject, message, timestamp) VALUES ('$name', '$email', '$subject', '$message', '$timestamp')"); //Local Environment
    if($query){
        header($returnLocation);
    }
}catch(Exception $e){
    throw $e;
}
