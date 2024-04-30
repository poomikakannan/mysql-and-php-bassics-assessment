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


$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        echo $row['product_id'];
        echo $row['name'];
        echo $row['price'];
        echo '<img src="' . $row['image'] . '" alt="' . htmlspecialchars($row['description']) . '" width="150">';
        echo '</div>';
    }
} else {
    echo 'No products found.';
}

$conn->close();





?>


