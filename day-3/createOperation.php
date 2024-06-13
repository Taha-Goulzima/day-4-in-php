<?php

include 'config.php';

$name = "John Doe";
$email = "john@example.com";
$age = 25;

$sql = "INSERT INTO users (name, email, age) VALUES (:name, :email, :age)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':age', $age);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->errorInfo()[2];
}
?>