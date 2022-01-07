<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['number'];
$age = $_POST['age'];
$governorate = $_POST['governorate'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$bloodType = $_POST['bloodType'];
$comment = $_POST['comment'];
$contact = $_POST['contact'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, number, age, governorate, city, gender, bloodType, comment, contact) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiissssss", $firstName, $lastName, $email, $number, $age, $governorate, $city, $gender, $bloodType, $comment, $contact);
    $execval = $stmt->execute();
    echo $execval;
    echo "Your information has been successfully registered, Thank you";
    $stmt->close();
    $conn->close();
}
