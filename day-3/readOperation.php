<?php

include 'config.php';

$sql = "SELECT id, name, email, age FROM users";
$stmt = $pdo->query($sql);

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Age: " . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}
?>