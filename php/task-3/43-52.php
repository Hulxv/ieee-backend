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
    function greeting(string $name, string $gender = "Unknown")
    {
        $title = match (strtolower($gender)) {
            "male" => "Mr",
            "female" => "Miss",
            default => "",
        };

        return "Hello $title $name";
    }

    printf("%s <br/>", greeting("Osama", "Male"));
    printf("%s <br/>", greeting("Eman", "Female"));
    printf("%s <br/>", greeting("Sameh"));


    function get_arguments(...$args)
    {
        return implode(" ", $args);
    }

    echo get_arguments("Hello", "Elzero", "Web", "School");
    echo get_arguments("I", "Love", "PHP");


    function sum_all(...$numbers)
    {
        $numbers = array_filter($numbers, 'is_numeric');

        return array_sum($numbers);
    }

    echo sum_all(10, 12, 5, 6, 6, 10);
    echo sum_all(5, 10, 5, 10);

    function multiply(...$numbers)
    {
        $product = 1;

        $numbers = array_filter($numbers, 'is_numeric');

        foreach ($numbers as $number) {
            $product *= $number;
        }
        return $product;
    }

    // Function calls with different arguments
    echo multiply(10, 20);                // 200
    echo multiply("A", 10, 30);           // Warning: Non-numeric values (A, 30) were ignored. Only numeric values are multiplied.
    echo multiply(100.5, 10, "B");        // 1005
    



    function check_status($a, $b, $c)
    {
        // Use list() to assign variables based on their type
        list($name, $age, $available) = array_map('intval', array_filter([$a, $b, $c], 'is_numeric')) + array_filter([$a, $b, $c], 'is_string');

        $availability = $available ? "Available For Hire" : "Not Available For Hire";

        return "Hello $name, Your Age Is $age, You Are $availability";
    }

    printf("%s <br/>", check_status("Osama", 38, true));
    printf("%s <br/>", check_status(38, "Osama", true));
    printf("%s <br/>", check_status(true, 38, "Osama"));
    printf("%s <br/>", check_status(false, "Osama", 38));




    function calculate(float $a, float $b, string $operation = "add"): float
    {
        $validOperations = ["add", "subtract", "multiply", "m", "s"];
        $operation = strtolower($operation); // Make operation case-insensitive
    
        if (!in_array($operation, $validOperations)) {
            throw new InvalidArgumentException("Invalid operation: $operation");
        }

        switch ($operation) {
            case "add":
                $result = $a + $b;
                break;
            case "subtract":
            case "s":
                $result = $a - $b;
                break;
            case "multiply":
            case "m":
                $result = $a * $b;
                break;
            default:
                $result = "Operation not found";
                break;
        }

        return $result;
    }

    // Function calls with different arguments
    echo calculate(10, 20);             
    echo calculate(10, 20, "a");        
    echo calculate(10, 20, "s");         
    echo calculate(10, 20, "subtract"); 
    echo calculate(10, 20, "multiply");  
    echo calculate(10, 20, "m");          
    echo calculate(10, "hello", "add");   
    


    function calculate_(int $num_one, int $num_two)
    {
        return (double) ($num_one + $num_two);
    }

    echo calculate(20, 10); 
    echo gettype(calculate(20, 10)); 
    
    ?>



</body>





</html>
