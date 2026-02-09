<?php
include 'includes/db.php';

echo "<h2>Database Repair Tool</h2>";

// 1. Check if tables exist and create them if not
$tables = [
    'users' => "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        phone VARCHAR(20),
        role ENUM('admin', 'customer', 'driver') DEFAULT 'customer',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    'driver_details' => "CREATE TABLE IF NOT EXISTS driver_details (
        user_id INT PRIMARY KEY,
        license_number VARCHAR(50) NOT NULL,
        experience_years INT DEFAULT 0,
        rating DECIMAL(3, 2) DEFAULT 5.00,
        status ENUM('Available', 'On Trip', 'Offline') DEFAULT 'Available',
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    )",
    'trucks' => "CREATE TABLE IF NOT EXISTS trucks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        plate_number VARCHAR(50) NOT NULL UNIQUE,
        model VARCHAR(255) NOT NULL,
        truck_type ENUM('Flatbed', 'Lowbed', 'Semi-Trailer', 'Hydraulic Axle', 'Standard') NOT NULL DEFAULT 'Standard',
        capacity DECIMAL(10, 2) NOT NULL,
        status ENUM('Available', 'In Transit', 'Maintenance') DEFAULT 'Available',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    'routes' => "CREATE TABLE IF NOT EXISTS routes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        origin VARCHAR(255) NOT NULL,
        destination VARCHAR(255) NOT NULL,
        distance_km INT NOT NULL,
        base_price DECIMAL(10, 2) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    'bookings' => "CREATE TABLE IF NOT EXISTS bookings (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_id INT NOT NULL,
        truck_id INT DEFAULT NULL,
        driver_id INT DEFAULT NULL,
        start_location VARCHAR(255) NOT NULL,
        end_location VARCHAR(255) NOT NULL,
        distance_km INT,
        estimated_price DECIMAL(10, 2),
        booking_date DATETIME DEFAULT CURRENT_TIMESTAMP,
        scheduled_date DATE NOT NULL,
        status ENUM('Pending', 'Confirmed', 'In Transit', 'Completed', 'Cancelled') DEFAULT 'Pending',
        FOREIGN KEY (customer_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (truck_id) REFERENCES trucks(id) ON DELETE SET NULL,
        FOREIGN KEY (driver_id) REFERENCES users(id) ON DELETE SET NULL
    )",
    'load_info' => "CREATE TABLE IF NOT EXISTS load_info (
        booking_id INT PRIMARY KEY,
        goods_type VARCHAR(255) NOT NULL,
        weight DECIMAL(10, 2) NOT NULL,
        length DECIMAL(5, 2),
        width DECIMAL(5, 2),
        height DECIMAL(5, 2),
        description TEXT,
        FOREIGN KEY (booking_id) REFERENCES bookings(id) ON DELETE CASCADE
    )",
    'payments' => "CREATE TABLE IF NOT EXISTS payments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        booking_id INT NOT NULL,
        transaction_id VARCHAR(100),
        amount DECIMAL(10, 2) NOT NULL,
        payment_method VARCHAR(50) DEFAULT 'Credit Card',
        status ENUM('Pending', 'Paid', 'Failed') DEFAULT 'Pending',
        payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (booking_id) REFERENCES bookings(id) ON DELETE CASCADE
    )"
];

foreach ($tables as $name => $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Table '$name' verification successful.<br>";
    } else {
        echo "<span style='color:red'>Error verifying table '$name': " . $conn->error . "</span><br>";
    }
}

// 2. Add sample data if users table is empty
$res = $conn->query("SELECT COUNT(*) as count FROM users");
$row = $res->fetch_assoc();
if ($row['count'] == 0) {
    // Insert Admin
    // hash for 'admin123'
    $pass = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
    $conn->query("INSERT INTO users (name, email, password, role) VALUES ('Admin User', 'admin@excel.com', '$pass', 'admin')");
    echo "Inserted default admin user.<br>";
}

echo "<h3>Database Repair Completed. Try booking again.</h3>";
echo "<a href='index.html'>Go Home</a>";
?>
