<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- http://localhost/2-php/3-get/confirmation.php?username=Sherry&id=33 -->

    <?php
    echo "<h1>HEllo " . $_GET['username']. "</h1>";
    echo "<h3>" . $_GET['id']. "</h3>";
    ?>
</body>
</html>