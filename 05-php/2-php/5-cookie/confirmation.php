<?php
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $id = $_POST['id'];
    setcookie('username2', $username);
    setcookie('id2', $id);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<h1>HEllo " . $_POST['username'] . "</h1>";
    echo "<h3>" . $_POST['id'] . "</h3>";
    ?>
    <a href="viewCookie.php"> View cookies  </a>

</body>

</html>