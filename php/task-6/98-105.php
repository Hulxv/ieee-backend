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

    // Set cookie names and values
    $cookieNames = [
        "site[layout]" => "boxed",
        "site[font]" => "Cairo",
        "site[color]" => "blue",
    ];

    $expireTime = time() + 62 * 24 * 60 * 60 + 5 * 24 * 60 * 60; // 2 months 
    
    // Set each cookie
    foreach ($cookieNames as $name => $value) {
        setcookie($name, $value, $expireTime, "/", "", true); // Secure and HTTP-only cookies
    }

    ?>

    <?php

    if (isset($_COOKIE['site'])) {
        $siteData = $_COOKIE['site'];
        $color = $siteData['color'];
        $font = $siteData['font'];
        $layout = $siteData['layout'];

        printf("Cookie Contents:");
        print_r($siteData);

        printf("<br> Your Color Is %s  And Your Font Is %s <br>", $color, $font);
    } else {
        printf("No cookies found.<br>");
    }


    ?>


    <?php

    if (isset($_COOKIE['site'])) {
        setcookie('site[layout]', '', -1, '/', );
        echo "layout removed removed from cookies";
    }

    ?>
    <?php

    if (isset($_COOKIE['site'])) {
        $siteData = $_COOKIE['site'];
        setcookie('site', $siteData, 0, "/", "", true);
    } else {
        echo "No cookies found." . PHP_EOL;
    }

    ?>

</body>





</html>
