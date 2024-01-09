<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['privilleged'])) {
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $quantity = $_POST['product_quantity'];
        $user = $_SESSION['privilleged'];

        $sql = "insert into `orders` (product_name, product_price, product_quantity,username) values ('$name',$price,$quantity,'$user')";
        $result = mysqli_query($con, $sql);
    
    } else {
        echo '<script>alert("Please sign in first")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1>Welcome to Razan Shop</h1>

    <?php
    if (isset($_SESSION['privilleged'])) {
        $user = $_SESSION['privilleged'];
        echo " <p>Hello $user, <a href='signout.php'>Signout</a> </p> 
        <a href='cart.php'>My Cart</a>";
    } else {
        echo " <a href='signin.php'>Sign in</a>";
    }
    ?>


    <div class="container">
        <div class="row">
            <?php
            $sql = "select * from products";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['product_name'];
                    $desc = $row['product_desc'];
                    $image = $row['product_image'];
                    $price = $row['product_price'];

                    echo '
                        <div class="card col-md-4 my-5 mx-auto" style="width: 18rem;">
                            <img src="' . $image . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $name . '</h5>
                                <p class="card-text">' . $desc . '</p>
                                <p class="card-text"> price: ' . $price . ' JD</p>
                            </div>
                            <form method="post">
                                <input type="hidden" name="product_name" value= ' . $name . '>
                                <input type="hidden" name="product_price" value= ' . $price . '>
                                <input type="number"  name="product_quantity" min="1" required>
                                <input type="submit" name="add_to_cart" value="Add to Cart">
                            </form>
                        </div>
                        ';

                }
            } ?>

        </div>
    </div>





</body>

</html>