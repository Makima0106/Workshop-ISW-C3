<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'workshop-3');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}