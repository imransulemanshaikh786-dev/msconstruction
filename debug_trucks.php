<?php
include 'includes/db.php';

echo "<h2>Trucks Table Debug</h2>";

// Check columns
$res = $conn->query("SHOW COLUMNS FROM trucks");
if ($res) {
    echo "<h3>Columns:</h3><ul>";
    while ($row = $res->fetch_assoc()) {
        echo "<li>" . $row['Field'] . " (" . $row['Type'] . ")</li>";
    }
    echo "</ul>";
} else {
    echo "Error showing columns: " . $conn->error . "<br>";
}

// Try to SELECT
echo "<h3>Select Test:</h3>";
$sel = $conn->query("SELECT * FROM trucks LIMIT 1");
if ($sel) {
    if ($sel->num_rows > 0) {
        $row = $sel->fetch_assoc();
        echo "Found a truck: " . print_r($row, true) . "<br>";
    } else {
        echo "No trucks found. (Query OK)<br>";
    }
} else {
    echo "Select Error: " . $conn->error . "<br>";
}

// Try to INSERT a dummy truck to check constraints
// We'll roll it back or delete it immediately, or just rely on the error.
// Actually, let's not insert garbage if we can avoid it.
?>
