<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landarea_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch calculation history
$sql = "SELECT id, shape, dimensions, area, unit, timestamp FROM calculations ORDER BY timestamp DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Shape</th>
                <th>Dimensions</th>
                <th>Area</th>
                <th>Unit</th>
                <th>Timestamp</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["shape"]. "</td>
                <td>" . $row["dimensions"]. "</td>
                <td>" . $row["area"]. "</td>
                <td>" . $row["unit"]. "</td>
                <td>" . $row["timestamp"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No calculation history found.";
}

$conn->close();
?>
