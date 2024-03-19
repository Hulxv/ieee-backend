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


    $friends = [
        "AG" => "Ahmed Gamal",
        "OM" => "Osama Mohamed",
        "MG" => "Mahmoud Gamal",
        "AS" => "Ahmed Samy",
        "FA" => "Farid Ahmed",
        "SM" => "Sayed Mohamed"
    ];

    $chunks = array_chunk($friends, 2);

    echo "<pre>";
    print_r($chunks);
    echo "</pre>";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $codes = ["H", "C", "J"];
    $means = ["HTML", "CSS", "JavaScript"];

    $combined_array = array_combine($codes, $means);

    echo "<pre>";
    print_r($combined_array);
    echo "</pre>";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $friends = [
        "Ahmed Gamal" => "AG",
        "Osama Mohamed" => "OM",
        "Mahmoud Gamal" => "MG",
        "Ahmed Samy" => "AS"
    ];

    $flipped_friends = [];
    foreach ($friends as $name => $code) {
        $flipped_friends[strtolower($code)] = $name;
    }

    echo "<pre>";
    print_r($flipped_friends);
    echo "</pre>";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nums = [10, 20, 30];

    $sum = array_reduce($nums, function ($carry, $item) {
        return $carry + $item;
    }, 0);

    echo $sum; // Output: 60
    
    $nums = [5, 10, 20, 5, 30, 40];

    $sum = array_reduce($nums, function ($carry, $item) {
        return $carry + $item;
    }, -10);

    echo $sum; // Output: 100
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $chars = ["A", "B", "C", "D", "E"];
    $char = "@@";
    $zero = 0;

    $desired_length = 10;

    $padded_chars = array_pad($chars, $desired_length, $char);

    $output = array_slice($padded_chars, 0, $desired_length);

    echo "<pre>";
    print_r($output);
    echo "</pre>";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

    reset($names);

    echo current($names) . "<br>"; // "Osama"
    
    next($names);

    echo current($names) . "<br>"; // "Ahmed"
    
    next($names);

    echo current($names) . "<br>"; // "Sayed"
    
    reset($names);

    for ($i = 0; $i < 3; $i++) {
        next($names);
    }

    echo current($names) . "<br>"; // "Mahmoud"
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nums = [1, 2, 3, 4, 5, 6];

    $sliced_nums = array_slice($nums, 1, 3);

    print_r($sliced_nums);

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
    $nums = [4, 5, 6];

    $merged_array = array_merge($mix, $nums);

    print_r($merged_array);

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $arr = ["A", "B", "C", "D", "E"];

    $counter = 0;

    foreach ($arr as $_) {
        $counter++;
    }

    echo $counter;

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $nums = [11, 2, 10, 7, 20, 50];

    // Initialize variables
    $total_sum = 0;
    $index = 0;

    while ($index < count($nums)) {
        $total_sum += $nums[$index];
        $index++;
    }

    echo $total_sum;

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nums = [10, 100, -20, 50, 30];

    $largest = null;

    foreach ($nums as $num) {
        if ($largest === null || $num > $largest) {
            $largest = $num;
        }
    }

    echo $largest;


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nums = [10, 100, -20, 50, 30];

    $smallest = null;

    foreach ($nums as $num) {
        if ($smallest === null || $num < $smallest) {
            $smallest = $num;
        }
    }

    echo $smallest;

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $chars = ["o", "r", "e", "z", "l", "E"];

    $result_string = "";

    for ($i = count($chars) - 1; $i >= 0; $i--) {
        $result_string .= $chars[$i];
    }

    echo $result_string;

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    

    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

    $result_array = [];
    $index = 0;

    while ($index < count($mix)) {
        if (is_numeric($mix[$index])) {
            $result_array[] = $mix[$index];
        }
        $index++;
    }

    print_r($result_array);

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

    $odd_numbers = [];
    $index = 0;

    while ($index < count($mix)) {
        if (is_numeric($mix[$index]) && $mix[$index] % 2 !== 0) {
            $odd_numbers[] = $mix[$index];
        }
        $index++;
    }


    print_r($odd_numbers);

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $title = "E&z\$r0 W\$b Sch00&";

    $replacements = [
        "&" => "l",
        "\$" => "e",
        "0" => "o",
    ];

    echo str_replace(array_keys($replacements), array_values($replacements), $title);



    ?>

</body>





</html>
