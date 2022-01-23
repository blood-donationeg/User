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
$contact = $_POST['contact'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, number, age, governorate, city, gender, bloodType, contact) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisssss", $firstName, $lastName, $email, $number, $age, $governorate, $city, $gender, $bloodType, $contact);
    $execval = $stmt->execute();

    echo "Your information has been successfully registered, Thank you";
    header("Location: /HTML/Collateral/Donation form/Welcome.html");
    $stmt->close();
    $conn->close();
}
