<?php
require("connect.php");

session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from users where username='$username' and password='$password';";
    $cakeDetails = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($cakeDetails);
    if ($row) {
        $_SESSION['privilleged'] = $username;
        header("location:products.php");
    } else {
        echo "Invalid username or password";
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
            <h2>Sign in</h2>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <button type="submit" name="login">Sign in </button>

            <p>Don't have an account? <a class="reg-link" href="signup.php"> Register Here </a></p>
        </div>
    </form>

</body>

</html>