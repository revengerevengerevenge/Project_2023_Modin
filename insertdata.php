<?php

require_once("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO REGISTER (email, password) VALUES ('$email', '$password')";
$conn -> query($sql);