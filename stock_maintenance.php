<?php
include 'db_connection.php';

// Capture form data
$laptop_model = $_POST['laptop_model'];
$stock_available = $_POST['stock_available'];
$price = $_POST['price'];
$configuration = $_POST['configuration'];

// Update or insert stock information
$sql = "INSERT INTO stock (laptop_model, stock_available, price, configuration) 
        VALUES ('$laptop_model', '$stock_available', '$price', '$configuration') 
        ON DUPLICATE KEY UPDATE 
        stock_available = '$stock_available', 
        price = '$price',
        configuration = '$configuration'";

if ($conn->query($sql) === TRUE) {
    echo "Stock updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
