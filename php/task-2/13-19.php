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
    <title>Welcome To
        <?php echo $title; ?>
    </title>
</head>

<body>
    <h1>Elzero Courses</h1>
    <p>Here In
        <?php echo $title; ?> We Provide Front-End And Back-End Courses
    </p>
    <hr>
    <div>
        <?php echo $title; ?> Is The What You Need.
    </div>
    <footer>All Right Reserved To
        <?php echo $title; ?>
    </footer>


    <?php
    $a = 200;
    $b = &$a;
    $a = 100;
    echo $b;
    ?>


    <?php
    echo sprintf("<br/> %s <br/>", $_SERVER['DOCUMENT_ROOT']);
    echo sprintf("<br/> %s <br/>", $_SERVER['SERVER_NAME']);
    ?>

    <?php
    /**
     * if
     * else
     * elseif
     * switch
     * for
     * do
     * while
     * foreach
     * continue
     * break
     */
    ?>

    <?php
    echo sprintf("<br/> %s <br/>", __LINE__);
    echo sprintf("<br/> %s <br/>", __FILE__);
    echo sprintf("<br/> %s <br/>", __DIR__);
    ?>
</body>





</html>
