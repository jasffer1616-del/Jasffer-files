<?php
session_start();
include("connect.php");

$user_id = $_SESSION['id'];
$product = $_POST['product'];
$name = $_POST['name'];
$size = $_POST['size'];
$section = $_POST['section'];
$idnumber = $_POST['idnumber'];
$reference = $_POST['reference'];
$amount = $_POST['amount'];

$_SESSION['product'] = $_POST['product'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['size'] = $_POST['size'];
$_SESSION['section'] = $_POST['section'];
$_SESSION['idnumber'] = $_POST['idnumber'];
$_SESSION['reference'] = $_POST['reference'];
$_SESSION['amount'] = $_POST['amount'];


$sql = "INSERT INTO orders (user_id, product, name, size, section, idnumber, reference, amount)
        VALUES ('$user_id', '$product', '$name', '$size', '$section', '$idnumber', '$reference', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "SQL ERROR: " . $conn->error;
}

?>


