<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Info get</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- http://localhost/2-php/3-get/confirmation.php?username=Sherry&id=33 -->
  <form action="confirmation.php" method="post">

    <div class="container">
      <div>
        <h2> Student Info </h2>
        <label for="username"><b>Name</b></label>
        <input type="text" placeholder="Enter your name" name="username" required>

        <label for="id"><b>Id</b></label>
        <input type="text" placeholder="Enter Your Id" name="id" required>
        <br>
        <br>
        <button type="submit">submit</button>
      </div>
    </div>
  </form>
</body>

</html>