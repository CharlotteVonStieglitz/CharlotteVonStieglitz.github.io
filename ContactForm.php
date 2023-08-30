<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}
?>



