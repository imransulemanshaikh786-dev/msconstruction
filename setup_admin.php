<?php
include 'includes/db.php';
include 'includes/functions.php';

echo "<h1>Admin Setup Script</h1>";

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red'>Connection failed: " . $conn->connect_error . "</p>");
}
echo "<p style='color:green'>Database connected successfully.</p>";

// Data for admin user
$email = 'admin@excel.com';
$password = 'admin123';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$name = 'System Admin';
$role = 'admin';

// Check if user exists
$check_sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    echo "<p>Admin user ($email) already exists.</p>";
    // Optional: Update password
    $update_sql = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
    if ($conn->query($update_sql)) {
        echo "<p style='color:green'>Password reset to: <b>$password</b></p>";
    } else {
        echo "<p style='color:red'>Error updating password: " . $conn->error . "</p>";
    }
} else {
    // Insert new user
    $insert_sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$hashed_password', '$role')";
    if ($conn->query($insert_sql)) {
        echo "<p style='color:green'>Admin user created successfully!</p>";
        echo "<p>Email: <b>$email</b><br>Password: <b>$password</b></p>";
    } else {
        echo "<p style='color:red'>Error creating user: " . $conn->error . "</p>";
    }
}

echo "<br><a href='pages/auth/login.html'>Go to Login</a>";
?>
