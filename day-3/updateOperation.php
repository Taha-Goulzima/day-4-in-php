<?php

include 'config.php';

$id = 1;
$newName = "Jane Doe";
$newEmail = "jane@example.com";
$newAge = 30;

$sql = "UPDATE users SET name = :name, email = :email, age = :age WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $newName);
$stmt->bindParam(':email', $newEmail);
$stmt->bindParam(':age', $newAge);

if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $stmt->errorInfo()[2];
}
?>