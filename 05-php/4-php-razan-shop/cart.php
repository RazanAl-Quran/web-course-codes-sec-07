<?php
include 'connect.php';
session_start();
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
    <h1>Your Cart</h1>

    <div class="container">
        <button class="btn btn-primary my-5"> <a href="products.php" class="text-light">Our Products</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $user = $_SESSION['privilleged'];
                $sql = "select * from orders where username='$user';";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    $total = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $product_name = $row['product_name'];
                        $product_quantity = $row['product_quantity'];
                        $product_price = $row['product_price'] * $product_quantity;
                        $total += $product_price;
                        // echo $name;             
                        echo ' <tr>
                            <td>' . $product_name . '</td>
                            <td>' . $product_price . ' JD</td>
                            
                            <td>
                                <form action="updateItem.php">
                                    <input type="number"  name="product_quantity" value= ' . $product_quantity . '>
                                    <input type="hidden" name="product_id" value= ' . $id . '>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </form>
                            </td>
                           
                            <td>
                            <button class="btn btn-danger"><a class="text-light" href="deleteItem.php?id=' . $id . '">Delete</a></button>
                            </td>
                            </tr>';

                    }

                }
                ?>

            </tbody>
        </table>
        <?php
        echo "<p>Total: $total JD<p/>";
        ?>
    </div>
</body>

</html>