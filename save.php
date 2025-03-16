<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $freefire_id = htmlspecialchars($_POST['freefire_id']);
    $phone = htmlspecialchars($_POST['phone']);

    // Change this path to match your desktop path
    $file_path = "data.txt"; // For Windows
    // $file_path = "/Users/YourUsername/Desktop/data.txt"; // For Mac/Linux

    $data = "Name: $name, Email: $email, Free Fire ID: $freefire_id, Phone: $phone\n";

    file_put_contents($file_path, $data, FILE_APPEND);

    echo "Registration Successful! Data saved to Desktop.";
} else {
    echo "Invalid request!";
}
?>
