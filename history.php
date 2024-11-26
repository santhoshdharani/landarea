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

// Get data from the form
$shape = $_POST['shape'];
$unit = $_POST['unit'];
$area = 0;
$dimensions = '';

// Calculate area based on shape
switch($shape) {
    case 'rectangle':
        $length = $_POST['length'];
        $width = $_POST['width'];
        $area = $length * $width;
        $dimensions = "Length: $length, Width: $width";
        break;
    case 'circle':
        $radius = $_POST['radius'];
        $area = M_PI * $radius * $radius;
        $dimensions = "Radius: $radius";
        break;
    case 'triangle':
        $base = $_POST['base'];
        $height = $_POST['height'];
        $area = 0.5 * $base * $height;
        $dimensions = "Base: $base, Height: $height";
        break;
    case 'square':
        $side = $_POST['side'];
        $area = $side * $side;
        $dimensions = "Side: $side";
        break;
    case 'parallelogram':
        $baseP = $_POST['baseP'];
        $heightP = $_POST['heightP'];
        $area = $baseP * $heightP;
        $dimensions = "Base: $baseP, Height: $heightP";
        break;
    case 'rhombus':
        $diag1 = $_POST['diag1'];
        $diag2 = $_POST['diag2'];
        $area = 0.5 * $diag1 * $diag2;
        $dimensions = "Diagonal1: $diag1, Diagonal2: $diag2";
        break;
    case 'trapezoid':
        $base1 = $_POST['base1'];
        $base2 = $_POST['base2'];
        $height = $_POST['height'];
        $area = 0.5 * ($base1 + $base2) * $height;
        $dimensions = "Base1: $base1, Base2: $base2, Height: $height";
        break;
}

// Insert into database
$sql = "INSERT INTO calculations (shape, dimensions, area, unit) VALUES ('$shape', '$dimensions', '$area', '$unit')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. Area: $area $unit<sup>2</sup>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
