<?php
include 'includes/db.php';

echo "<h1>Database Check</h1>";

if ($conn->connect_error) {
    die("<p style='color:red;'>Connection Failed: " . $conn->connect_error . "</p>");
} else {
    echo "<p style='color:green;'>Connection Successful!</p>";
}

$tables = ['users', 'bookings', 'trucks', 'driver_details', 'load_info', 'routes', 'payments'];
$missing_tables = [];

echo "<h2>Table Check</h2><ul>";
foreach ($tables as $table) {
    if ($conn->query("SHOW TABLES LIKE '$table'")->num_rows > 0) {
        echo "<li><span style='color:green;'>Found table: $table</span></li>";

        // Inspect columns for bookings
        if ($table == 'bookings') {
            echo "<ul>";
            $columns = ['estimated_price', 'scheduled_date', 'status', 'booking_date'];
            $res = $conn->query("SHOW COLUMNS FROM bookings");
            $found_cols = [];
            while ($row = $res->fetch_assoc()) {
                $found_cols[] = $row['Field'];
            }

            foreach ($columns as $col) {
                if (in_array($col, $found_cols)) {
                    echo "<li>Found column: $col</li>";
                } else {
                    echo "<li><span style='color:red;'>MISSING COLUMN: $col</span></li>";
                }
            }
            echo "</ul>";
        }

    } else {
        echo "<li><span style='color:red;'>MISSING TABLE: $table</span></li>";
        $missing_tables[] = $table;
    }
}
echo "</ul>";

if (!empty($missing_tables)) {
    echo "<h3>Action Required:</h3><p>Please re-import <b>database/schema.sql</b> to fix missing tables.</p>";
} else {
    echo "<h3>Status: Good</h3><p>Database structure looks correct.</p>";
}
?>
