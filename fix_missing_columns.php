<?php
include 'includes/db.php';

echo "<h2>Database Column Fixer</h2>";

// Fix bookings table
echo "Checking 'bookings' table...<br>";

// Add estimated_price
try {
    $conn->query("ALTER TABLE bookings ADD COLUMN estimated_price DECIMAL(10, 2) DEFAULT 0.00");
    echo "Added 'estimated_price' column successfully.<br>";
} catch (Exception $e) {
    echo "Column 'estimated_price' might already exist or error: " . $e->getMessage() . "<br>";
}

// Add scheduled_date if missing
try {
    $conn->query("ALTER TABLE bookings ADD COLUMN scheduled_date DATE NULL");
    echo "Added 'scheduled_date' column successfully.<br>";
} catch (Exception $e) {
    echo "Column 'scheduled_date' might already exist or error: " . $e->getMessage() . "<br>";
}

// Add distance_km if missing
try {
    $conn->query("ALTER TABLE bookings ADD COLUMN distance_km INT DEFAULT 0");
    echo "Added 'distance_km' column successfully.<br>";
} catch (Exception $e) {
    echo "Column 'distance_km' might already exist or error: " . $e->getMessage() . "<br>";
}

// Fix trucks table - Add truck_type
echo "Checking 'trucks' table...<br>";
try {
    $conn->query("ALTER TABLE trucks ADD COLUMN truck_type ENUM('Flatbed', 'Lowbed', 'Semi-Trailer', 'Hydraulic Axle', 'Standard') NOT NULL DEFAULT 'Standard' AFTER model");
    echo "Added 'truck_type' column successfully.<br>";
} catch (Exception $e) {
    echo "Column 'truck_type' might already exist or error: " . $e->getMessage() . "<br>";
}

// Fix Load Info table existence
$conn->query("CREATE TABLE IF NOT EXISTS load_info (
    booking_id INT PRIMARY KEY,
    goods_type VARCHAR(255) NOT NULL,
    weight DECIMAL(10, 2) NOT NULL,
    length DECIMAL(5, 2),
    width DECIMAL(5, 2),
    height DECIMAL(5, 2),
    description TEXT,
    FOREIGN KEY (booking_id) REFERENCES bookings(id) ON DELETE CASCADE
)");
echo "Verified 'load_info' table.<br>";

echo "<h3 style='color:green'>Fixes Applied. Please try booking again.</h3>";
echo "<a href='pages/customer/book.html'>Go back to Booking Page</a>";
?>
