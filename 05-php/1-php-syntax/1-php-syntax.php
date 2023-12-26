<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to my first PHP</h1>
    <?php
    echo "hello from my first echo";
    echo "<h2>hello from my first echo</h2>";

    // this is a comment
    # this is a comment
    /* this is a multi 
     line comment*/

    // In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
    echo "Hello World!<br>";
    // ECHO "Hello World!<br>";
    // EcHo "Hello World!<br>";
    
    echo phpversion();
    echo "<br>";


    $username = "Sherry";
    echo $username;
    echo "<br>";
    echo "hello from $username <br>";
    echo "<p>hello from $username</p>";

    $txt1 = "Learn PHP";
    echo "<h2> $txt1 </h2>";
    echo "<h2>" . $txt1 . "</h2>";


    $x = 5;
    var_dump($x);
    $x++;
    echo $x;
    var_dump($x);
    echo "<br>";
    $x = (string) $x;
    var_dump($x);
    echo "<br>";

    // PHP String >> Double or Single Quotes?
    echo "hello";
    echo 'hello';
    echo "<br>";
    $user1 = "John";
    echo "Hello $user1";
    echo "<br>";
    echo 'Hello $user1';

    echo "<br>";
    echo strlen("Hello world!"); //12
    

    const MYCAR = "Volvo";
    echo MYCAR;
    echo "<br>";
    define("GREETING", "Welcome to HTU!");
    echo GREETING;


    // Ternary IF
    echo "<br>";
    $a = 13;
    $b = $a < 10 ? "Hello" : "Good Bye";
    // if($a<10) {
    //     $b = "Hello";
    // } else {
    //     $b = "Good Bye";
    // }
    echo $b;

    // Arrays
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo "<br>";

    for ($i = 0; $i < count($cars); $i++) {
        echo $cars[$i] . "<br>";
    }

    // Associative Arrays
    $students = array("Ahmad" => "Computer Science", "Khaled" => "Data Science", "Ibrahim" => "Cyber Security");
    echo $students[0];
    echo "<br>";
    echo $students["Ahmad"];
    echo "<br>";
    foreach ($students as $name => $major) {
        echo "Key=" . $name . ", Value=" . $major;
        echo "<br>";
    }








    ?>
</body>

</html>