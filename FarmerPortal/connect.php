<?php
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $Phone = $_POST['phone'];
    $Address = $_POST['address'];
    $Quantity = $_POST['quantity'];
    $Checkout = $_POST['checkOut'];
    $Scheduledreturn = $_POST['scheduledReturn'];
    $Payment = $_POST['payment'];

    //Database connnection
    $conn = new mysqli('localhost', 'root', '', 'impulse101');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("Insert into rental(firstName,lastname,phone,address,quantity,checkOut,scheduledReturn,payment)values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisisss",$firstName, $lastName, $Phone, $Address, $Quantity, $Checkout, $Scheduledreturn, $Payment);
        $stmt->execute();
        echo "<script>
        alert('Applied for rental successfully');
        window.location.href='rentalProducts.php';
        </script>";
        
        $stmt->close();
        $conn->close();
    }
?>