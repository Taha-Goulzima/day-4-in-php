<?php

include 'config.php';

$id = 1;

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $stmt->errorInfo()[2];
}
?>