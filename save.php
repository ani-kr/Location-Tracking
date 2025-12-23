<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];
$lat = $_POST['latitude'];
$lng = $_POST['longitude'];

mysqli_query($conn,"INSERT INTO locations
(name,email,phone,description,latitude,longitude)
VALUES
('$name','$email','$phone','$description','$lat','$lng')");

header("Location: map.php");
