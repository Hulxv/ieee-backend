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
    $a = 100;
    $b = 200;
    $c = 100;

    if ($a > $b && $a == $c && $a + $c == $b) {
        echo "yes";
    }
    if ($a < $b || $a < $c) {
        echo "A Is Not Larger Than B Or C";
    }

    if ($a > $b) {
        echo "A > B";
    }
    if ($a < $c) {
        echo "A > C";
    }

    ?>

    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
    <?php
    $admins = array("Osama", "Ahmed", "Sayed");
    $user = $_POST['user'];
    if (in_array($user, $admins)) {
        printf("\nThis Username {$user} is an admin\n");
    } else {
        printf("<br/>This Username {$user} isn't an admin\n");

    }
    ?>

    <?php
    $a = 30;
    $b = 20;
    $c = 10;


    echo $a + $b === $c ? "A + B = C" : ($a + $c === $b ? "A + C = B" : ($b + $c === $a ? "B + C = A" : "The end"));
    ?>


    <form action="" method="GET">
        <input type="text" name="genre">
        <input type="submit" value="Send">
    </form>
    <?php
    $genre = $_GET['genre'];

    printf("<br/> %s", match ($genre) {
        "RBG" => "I Recommend Ys Games",
        "Hack And Slash" => "I Recommend Castlevania Games",
        "FPS" => "I Recommend Uncharted Games",
        "Platform" => "I Recommend Megaman Games",
        "Puzzle" => "I Recommend Megaman Games",
        default => "I Recommend Shadow Of Mordor And Shadow Of War",
    })
        ?>

</body>





</html>
