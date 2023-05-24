<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Subject: " . $subject . "<br><br><br>";


}
?>

<button onclick="window.location.href = 'connect-me.html';">Go Back</button>
