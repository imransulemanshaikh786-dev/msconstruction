<?php
include 'includes/db.php';
include 'includes/functions.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Debug Report</h1>";

// 1. Check Tables
$tables = ['users', 'bookings', 'trucks', 'driver_details', 'load_info', 'payments'];
foreach ($tables as $t) {
    $res = $conn->query("SHOW TABLES LIKE '$t'");
    if ($res->num_rows > 0) {
        echo "<p style='color:green;'>Table '$t' exists.</p>";
    } else {
        echo "<p style='color:red;'>Table '$t' MISSING!</p>";
    }
}

// 2. Check for some specific data
$user_check = $conn->query("SELECT COUNT(*) as count FROM users")->fetch_assoc();
echo "<p>Total Users: " . $user_check['count'] . "</p>";

$booking_check = $conn->query("SELECT COUNT(*) as count FROM bookings")->fetch_assoc();
echo "<p>Total Bookings: " . $booking_check['count'] . "</p>";

// 3. Check for specific columns
$res = $conn->query("SHOW COLUMNS FROM bookings");
$cols = [];
while ($r = $res->fetch_assoc())
    $cols[] = $r['Field'];
if (in_array('status', $cols))
    echo "<p style='color:green;'>Column 'status' exists in bookings.</p>";
else
    echo "<p style='color:red;'>Column 'status' MISSING in bookings!</p>";

if (in_array('estimated_price', $cols))
    echo "<p style='color:green;'>Column 'estimated_price' exists in bookings.</p>";
else
    echo "<p style='color:red;'>Column 'estimated_price' MISSING in bookings!</p>";

// 4. Test function
echo "<p>Test getStatusStyle('Pending'): " . getStatusStyle('Pending') . "</p>";
echo "<p>Test getStatusStyle('In Transit'): " . getStatusStyle('In Transit') . "</p>";
?>
