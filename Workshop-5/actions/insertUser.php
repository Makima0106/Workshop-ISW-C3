<?php
include('../common/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];

    $sql = "INSERT INTO users (name, lastName, username, password, role, status, last_login_datetime)
            VALUES ('$name', '$lastName', '$username', '$password', 'user', 'active'";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: /index.php?username=$username");
        exit();
    } else {
        mysqli_close($conn);
        header("Location: /index.php?errors=registraton_failed");
        exit();
    }
}
?>