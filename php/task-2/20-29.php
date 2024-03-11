<!DOCTYPE html>
<html lang="en">

<?php
$title = "Elzero Courses"
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">

</head>

<body>

    <?php
    echo 10 * 20 + 15 / 3 + 190 + 5 - 400
        ?>

    <?php
    $a = "10";
    echo intval($a) . "";
    echo (int) $a . "";

    settype($a, "integer");
    echo $a;

    ?>


    <?php
    $a = 10;
    $b = 20;


    echo $a + $b - 31;
    ?>


    <?php
    $a = 10;
    $b = 20;
    $c = 15;

    var_dump($a < $b); // True
    var_dump($c > $a); // True
    var_dump($a < $b); // True
    var_dump($a < $b); // True
    var_dump($a < $c); // True
    var_dump($a < $c); // True
    var_dump(gettype($a) == gettype($b)); // True
    var_dump(gettype($a) == gettype($b)); // True
    var_dump(gettype((float) $a) != gettype($b)); // True
    ?>

    <?php

    $points = 10;

    for ($i = 0; $i < 3; $i++) {
        $points++;
    }

    echo $points; // 13
    
    for ($i = 0; $i < 5; $i++) {
        $points--;
    }

    echo $points; // 8;
    ?>


    <?php

    $a = "Elzero";
    $b = "Web";
    $c = "School";

    // Method One
    $d = sprintf("%s %s %s", $a, $b, $c);

    // Method Two
    $d = $a . " " . $b . " " . $c;


    // Method Three
    $d = "$a $b $c";

    // Method Four
    $d = "{$a} {$b} {$c}";

    echo $d; // Elzero Web School
    ?>
</body>





</html>
