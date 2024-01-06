<?php
include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1>Employees panel</h1>
    <p>Welcome to HTU Employees Dashboard Panel</p>

    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM users;";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $id2 = $row["id"];
                    $username2 = $row["username"];
                    $salary2 = $row["salary"];
                    echo "
                    <tr>
                        <td>$id2</td>
                        <td>$username2</td>
                        <td>$salary2</td>
                        <td>
                            <button class='btn btn-primary'><a  class='text-light' href='updateUser.php?id=$id2'>Update</a></button>

                            <button class='btn btn-danger'><a class='text-light' href='deleteUser.php?id=$id2'>Delete</a></button></td>
                        </td>
                    </tr>
                    ";
                }

                ?>
            </tbody>
        </table>
    </div>




</body>

</html>