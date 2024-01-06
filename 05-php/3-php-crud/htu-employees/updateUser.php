<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id4 = $_GET["id"];
    $sql = "select * from users where id=$id4";
    $empDetails = mysqli_query($con, $sql);
    $empDetails = mysqli_fetch_assoc($empDetails);

    $username3 = $empDetails['username'];
    $salary3 = $empDetails['salary'];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username5'];
    $salary = $_POST['salary5'];

    echo $username;

    $sql = "update users set username='$username',salary='$salary' where id=$id4";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data inserted successfully";
        header('Location: display.php');
    } else {
        echo "data inserted failure";
        die(mysqli_error($con));
    }
}



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
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="username5" value=<?php echo $username3 ?>>
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary5" value=<?php echo $salary3 ?>>
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</body>

</html>