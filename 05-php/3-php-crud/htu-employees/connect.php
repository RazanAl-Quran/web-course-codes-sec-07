<?php

$con = new mysqli('localhost', 'root', '', 'employees2');

if($con) {
    echo 'success connection';
} else {
    die(mysqli_error($con));
}
?>