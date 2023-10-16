<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
</body>
</html>
