<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Our HTU Courses</h3>
    <?php
    // get data from courses table (htu database) and store the response in courses array
    $courses = array('programming', 'advanced programming', 'data structures');
    echo "<ul>";
    for ($i = 0; $i < count($courses); $i++) {
        echo "<li> $courses[$i] </li>";
    }
    echo "</ul>";

    // TABLES
    $grades = array("khaled" => 80, "Saif" => 100, "raha" => 98);

    echo "<table border=1>";
    echo "
    <tr>
        <th> Name </th>
        <th> grade </th>
    </tr>";
  
    foreach ($grades as $student => $grade) {
      echo "
      <tr>
        <td> $student </td>
        <td> $grade </td>
      </tr>";
    }
  
    echo "</table>";



    ?>
</body>

</html>