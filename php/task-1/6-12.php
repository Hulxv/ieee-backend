<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php

    // 1st task
    echo floor(15.2 + 14.7 + (10.5 + 10.5)); // 50
    echo "\n";
    echo gettype(floor(15.2 + 14.7 + (10.5 + 10.5))); // Integer
    

    // 2nd task
    echo gettype(100);
    if (is_int(100)) {
        echo "int";
    }
    echo get_debug_type(100);

    // 4th task
    echo "</br>We </br> Love </br> Elzero </br> Web </br> School";

    // 6th task
    $something = "programming";
    echo "</br> Hello \\PHP\\ </br>We love $something";


    $array = array(
        "frontend" => [
            "html",
            "css",
            "js" => [
                "vuejs" => [
                    2 => "v2",
                    3 => "v3"
                ],
                "reactjs",
                "svelte"
            ],

        ],
        "backend" => [
            "php",
            "mysql",
            "security"
        ],
        "git",
        "github",
        "testing" => [
            "unit testing",
            "e2e",
            "integration",
        ]
    );
    echo "</br>";
    var_dump($array);

    ?>


</body>

</html>
