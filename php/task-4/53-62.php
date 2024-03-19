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


    $num_one = -1;
    $num_two = 2.5;

    $let_one = "o";
    $let_two = "z";

    $str = "El%er0";

    // Write Your Code Here
    $str[$num_one] = 'o';
    $str[floor($num_two)] = 'z';

    echo $str; // Elzero
    
    $str = "Orezle";

    printf(substr_replace(strrev($str), "o", -1)); // Elzero
    
    $str = 'aAa';
    $num = 3;
    $char = "_";

    $repeated_str = str_repeat($str, $num);

    $char_array = str_split($repeated_str);

    $result = implode($char, $char_array);

    echo $result;  // Output: aaa_aaa_aaa_
    

    $str = "<div><b>Elzero</b></div>";

    $pattern = "/<div>(.*?)<\/div>/";
    $replacement = "\\1";

    $filtered_str = preg_replace($pattern, $replacement, $str);

    echo $filtered_str;  // Output: <b>Elzero</b>
    

    $str = "Elzero Web School";
    $e = "e";
    $o = "O";

    $e_count = substr_count($str, strtoupper($e));

    $o_count = substr_count(strtoupper($str), $o, 7);

    echo $e_count . PHP_EOL;  // Output: 1
    echo $o_count;            // Output: 2
    

    $chars = ["E", "l", "z", "e", "r", "o"];


    echo implode("", $chars); // Output: Elzero
    

    $chars = ["E", 1, 2, "l", "z", "e", "r", "o"];

    $filtered_chars = array_filter($chars, 'is_string');

    $output = implode("", $filtered_chars);

    echo $output; // Output: Elzero
    ?>

</body>





</html>
