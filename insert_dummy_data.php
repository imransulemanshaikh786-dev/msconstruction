<?php
include 'includes/db.php';

// 1. Create Dummy Trucks
$trucks = [
    ['AB-1234', 'Volvo FH16', 'Standard', 25.0, 'Available'],
    ['XY-9876', 'Scania R500', 'Flatbed', 30.0, 'In Transit'],
    ['OD-5555', 'Mercedes Actros', 'Lowbed', 60.0, 'Available'],
    ['HA-1111', 'Volvo FMX', 'Hydraulic Axle', 100.0, 'Available'],
    ['ST-2020', 'Tata Prima', 'Standard', 20.0, 'Maintenance']
];

foreach ($trucks as $truck) {
    $plate = $truck[0];
    $check = $conn->query("SELECT id FROM trucks WHERE plate_number='$plate'");
    if ($check->num_rows == 0) {
        $sql = "INSERT INTO trucks (plate_number, model, truck_type, capacity, status) VALUES ('$plate', '{$truck[1]}', '{$truck[2]}', {$truck[3]}, '{$truck[4]}')";
        $conn->query($sql);
        echo "Added truck: $plate<br>";
    }
}

// 2. Create Dummy Customers & Drivers
$users = [
    ['Aditi Sharma', 'aditi@example.com', 'customer', 'password123'],
    ['Rajesh Kumar', 'rajesh@driver.com', 'driver', 'driver123'],
    ['Suresh Singh', 'suresh@driver.com', 'driver', 'driver123'],
    ['Vikram Malhotra', 'vikram@example.com', 'customer', 'password123']
];

foreach ($users as $u) {
    $email = $u[1];
    $check = $conn->query("SELECT id FROM users WHERE email='$email'");
    if ($check->num_rows == 0) {
        $pass = password_hash($u[3], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password, role) VALUES ('{$u[0]}', '$email', '$pass', '{$u[2]}')";
        $conn->query($sql);
        echo "Added user: $email<br>";
    }
}

// 3. Add Driver Details
$drivers = $conn->query("SELECT id FROM users WHERE role='driver'");
while ($d = $drivers->fetch_assoc()) {
    $uid = $d['id'];
    $check = $conn->query("SELECT user_id FROM driver_details WHERE user_id=$uid");
    if ($check->num_rows == 0) {
        $lic = 'DL-' . rand(10000, 99999);
        $exp = rand(2, 20);
        $sql = "INSERT INTO driver_details (user_id, license_number, experience_years, status) VALUES ($uid, '$lic', $exp, 'Available')";
        $conn->query($sql);
        echo "Added details for driver ID: $uid<br>";
    }
}

// 4. Create Dummy Bookings
$customers_res = $conn->query("SELECT id FROM users WHERE role='customer' LIMIT 1");
if ($customers_res->num_rows > 0) {
    $cid = $customers_res->fetch_assoc()['id'];

    // Check if we already have bookings
    $b_check = $conn->query("SELECT id FROM bookings WHERE customer_id=$cid LIMIT 1");
    if ($b_check->num_rows == 0) {
        // Pending
        $conn->query("INSERT INTO bookings (customer_id, start_location, end_location, estimated_price, scheduled_date, status) VALUES ($cid, 'Mumbai', 'Pune', 15000.00, DATE_ADD(NOW(), INTERVAL 5 DAY), 'Pending')");

        // Confirmed
        $conn->query("INSERT INTO bookings (customer_id, start_location, end_location, estimated_price, scheduled_date, status) VALUES ($cid, 'New Delhi', 'Jaipur', 25000.00, DATE_ADD(NOW(), INTERVAL 2 DAY), 'Confirmed')");

        // Completed
        $conn->query("INSERT INTO bookings (customer_id, start_location, end_location, estimated_price, scheduled_date, status) VALUES ($cid, 'Bangalore', 'Chennai', 18000.00, DATE_SUB(NOW(), INTERVAL 3 DAY), 'Completed')");

        echo "Added dummy bookings for customer ID: $cid<br>";
    }
}

echo "<h3>Dummy Data Insertion Complete</h3>";
?>
