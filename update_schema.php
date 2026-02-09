<?php
include 'includes/db.php';

// Add status column to users table
$sql = "SHOW COLUMNS FROM users LIKE 'status'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Column doesn't exist, add it
    $sql = "ALTER TABLE users ADD COLUMN status ENUM('active', 'pending', 'rejected') DEFAULT 'active'";
    if ($conn->query($sql) === TRUE) {
        echo "Column 'status' added successfully to 'users' table.<br>";
    } else {
        echo "Error adding column 'status': " . $conn->error . "<br>";
    }
} else {
    echo "Column 'status' already exists.<br>";
}

// Reset all existing users to active just in case
$conn->query("UPDATE users SET status = 'active' WHERE status IS NULL OR status = ''");
echo "Database schema update check complete.";
?>
