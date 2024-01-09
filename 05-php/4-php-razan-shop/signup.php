<?php
require("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username,password) values ('$username','$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: signin.php");
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration </title>
</head>

<body>
    <form action="" method="POST">
        <div class="reg-container">
            <h2>Sign up</h2>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <button type="submit" >Register </button>

            <p>Already have an account? <a class="reg-link" href="signin.php"> Login Here </a></p>
        </div>
    </form>

</body>

</html>