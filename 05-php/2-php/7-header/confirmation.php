<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print_r($_POST);
    // echo "<h2>" . $_POST['username'] . " and Your id is" . $_POST['id'] . "</h2>";


    // store the data in the database

    header("Location: signin.php");



    ?>
</body>
</html>