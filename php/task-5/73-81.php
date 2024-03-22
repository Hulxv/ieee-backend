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



    printf("<br/>%s<br/>", mt_rand(10, 20));

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
    printf("<br/>%s<br/>", $friends[array_rand($friends)]);

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $num1 = 11.5; // 11
    $num2 = 9.4898; // 9.5
    $num3 = -7.5; // -7
    

    printf("%s<br/>", floor($num1));
    printf("%s<br/>", round($num2, 1));
    printf("%s<br/>", ceil($num3));

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $url1 = "http://www.elz ero.org";
    $url2 = "http://¥elzero.org";
    $url3 = "https://elzero.org";
    $url4 = "https://elzero.o¥rg";

    function validateURL($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
            printf("A Valid URL<br/>");
        } else {
            printf("Not A Valid URL<br/>");
        }
    }

    validateURL($url1);
    validateURL($url2);
    validateURL($url3);
    validateURL($url4);

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $url1 = "http://www.elz ero.org";
    $url2 = "http://¥elzero.org";
    $url3 = "https://elzero.org";
    $url4 = "https://elzero.o¥rg";

    function clean($url)
    {
        $filteredUrl = preg_replace('/[^a-z0-9\._~\-\:\!\;\$\*\+\,\?\=\@\/]/i', '', $url);

        $parsedUrl = parse_url($filteredUrl);

        if (isset ($parsedUrl['host']) && isset ($parsedUrl['scheme'])) {
            return $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
        } else {
            return "Invalid URL";
        }
    }
    foreach (array($url1, $url2, $url3, $url4) as $url) {
        printf("%s<br/>", clean($url));
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $filters = array();
    foreach (filter_list() as $id => $filter) {
        $filters[filter_id($filter)] = $filter;
    }

    print_r($filters);



    ?>

</body>





</html>
