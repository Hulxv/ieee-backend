<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">

</head>

<body>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        printf("<br/> %s", $i);
    }
    for ($i = 1; $i <= 10; $i++) {
        printf("<br/> %s", $i * 2);
    }
    $num = 2;
    $counter = 0;
    while ($num < 520) {
        if ($counter == 0) {
            $num = 1;
        } else {
            $num = $num + 3 * $counter;
        }

        printf("<br/> %s ", $num);
        $counter++;
    }

    $start = 10;
    $end = 0;
    $stop = 3;

    for ($i = $start; $i > $stop; $i--) {
        printf("<br/> %s", $i);
    }

    ?>



</body>





</html>
