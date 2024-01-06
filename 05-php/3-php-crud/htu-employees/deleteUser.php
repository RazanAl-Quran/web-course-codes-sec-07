<?php
include "connect.php";
// deleteUser.php?id=4

if (isset($_GET["id"])) {
    $id4 = $_GET["id"];
    $sql = "delete from users where id=$id4";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo ('your item has been deleted');
        // header('locat');
        header('Location: display.php');

    } else {
        die(mysqli_error($con));
    }
}
?>