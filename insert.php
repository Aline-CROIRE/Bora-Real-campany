<?php
require_once 'db_config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $conn) {
    
    $name = $_POST['Names'];
    $email = $_POST['Email'];
    $address = $_POST['address'];
    $selectedService = $_POST['Service'];
    $paymentMethod = $_POST['Method'];

    $stmt = $conn->prepare("INSERT INTO client (Names, Email, address, Service, Method) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $address, $selectedService, $paymentMethod);


    if ($stmt->execute()) {
        echo '<script>alert("Thank you! Your service request has been received. We will reach out to you in no time.");
        window.location.href = "land.php";</script>';
    } else {
        echo 'Error: ' . $stmt->error;
    }


    $stmt->close();
}


$conn->close();
?>