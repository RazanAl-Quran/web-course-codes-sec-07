<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    ?>

    <h1> Hello
        <?php echo $_SESSION['name'] ?>
    </h1>
    <a href="confirmation.php"> confirmation page </a>
    <a href="destroy.php"> Logout </a>
</body>

</html>