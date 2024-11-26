<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landarea_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all calculations from the database
$sql = "SELECT * FROM calculations ORDER BY timestamp DESC";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    echo "<h2>Calculation History</h2>";
    echo "<table border='1'>
            <tr>
                <th>Shape</th>
                <th>Dimensions</th>
                <th>Area</th>
                <th>Unit</th>
                <th>Timestamp</th>
            </tr>";

    // Fetch each row and display it
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['shape'] . "</td>
                <td>" . $row['dimensions'] . "</td>
                <td>" . $row['area'] . "</td>
                <td>" . $row['unit'] . "</td>
                <td>" . $row['timestamp'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No calculations found.";
}

// Close the connection
$conn->close();
?>
