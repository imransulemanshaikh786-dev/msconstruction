<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Diagnostic Start...\n";

try {
    include 'includes/db.php';
    echo "Database connection successful.\n";
} catch (Exception $e) {
    echo "Database connection FAILED: " . $e->getMessage() . "\n";
    exit(1);
}

// Check Users
$result = $conn->query("SELECT id, name, email, role FROM users");
if ($result) {
    echo "Users found in DB:\n";
    while ($row = $result->fetch_assoc()) {
        echo " - ID: " . $row['id'] . ", Email: " . $row['email'] . ", Role: " . $row['role'] . "\n";
    }
} else {
    echo "Error querying users: " . $conn->error . "\n";
}
echo "Diagnostic End.\n";
?>
