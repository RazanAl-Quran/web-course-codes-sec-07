<?php
include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $id = $_GET["product_id"];
    $quantity = $_GET['product_quantity'];


    $sql = "update orders set product_quantity='$quantity' where id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data updated successfully";
        header('Location: cart.php');
        // exit();
    } else {
        echo "data inserted failure";
        die(mysqli_error($con));
    }
}

?>
