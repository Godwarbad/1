<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $freefire_id = htmlspecialchars($_POST['freefire_id']);
    $phone = htmlspecialchars($_POST['phone']);

    $data = "Name: $name, Email: $email, Free Fire ID: $freefire_id, Phone: $phone\n";

    file_put_contents("data.txt", $data, FILE_APPEND);

    echo "Registration Successful!";
} else {
    echo "Invalid request!";
}
?>
