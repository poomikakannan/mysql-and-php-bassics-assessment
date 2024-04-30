<?php

require('index.php');

$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$dbname = "Products Details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["blog_id"] . " - Title: " . $row["title"] . " - Content: " . $row["content"] . " - Author: " . $row["author"] . " - Created at: " . $row["created_at"] . " - Status: " . $row["status"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();





?>


