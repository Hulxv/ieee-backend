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

    $root = disk_total_space("/") / (pow(1024, 4));
    $home = disk_total_space("/home") / (pow(1024, 4));

    printf("%s tb<br/>", round($root, 3));
    printf("%s tb<br/>", round($home, 3));
    ////////////////////////////////////////////
    
    $video_size = filesize("jjk.mp4");
    printf("%s kb<br>", round($video_size / 1024, 2));
    printf("%s mb<br>", round($video_size / pow(1024, 2), 2));

    ////////////////////////////////////////////
    function change_permissions($filename)
    {
        if (is_dir($filename)) {
            return "This Is Directory And Only Files Allowed\n";
        }

        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if ($extension !== "txt") {
            return "File Extension Is Not Txt\n";
        }


        chmod(pathinfo($filename, PATHINFO_DIRNAME), 0777);
        return "Permissions Changed\n";
    }

    // Test Cases
    printf("%s <br>", change_permissions("tests"));
    printf("%s <br>", change_permissions("tests/Work.docx"));
    printf("%s <br>", change_permissions("tests/Result.txt"));

    ////////////////////////////////////////////
    
    printf("%s <br>", __FILE__);
    printf("%s <br>", $_SERVER['SCRIPT_NAME']);
    printf("%s <br>", basename(__FILE__));
    printf("%s <br>", basename(__FILE__, '.php'));

    ////////////////////////////////////////////
    
    $filename = "elzero.txt";
    $content = file_get_contents($filename);
    $newContent = preg_replace("/Osamaa/i", "elzero", $content);
    $handle = fopen($filename, "w");

    if ($handle) {
        fwrite($handle, $newContent);
        fclose($handle);

        echo "Content of elzero.txt updated successfully!";
    } else {
        echo "Error opening the file!";
    }
    ?>

    <?php

    $filename = "elzero.txt";

    $content = file($filename);
    if ($content) {
        $firstTwoLines = array_slice($content, 0, 2);
        $combinedLine = trim(implode(" ", $firstTwoLines));

        echo $combinedLine . PHP_EOL;
    } else {
        echo "Error opening file!";
    }

    $handle = fopen($filename, "r");
    $combinedLine = "";
    if ($handle) {
        $i = 0;
        while ($i < 2 && !feof($handle)) {
            $line = rtrim(fgets($handle));
            $combinedLine .= $line . " ";
            $i++;
        }

        $combinedLine = trim($combinedLine);

        echo $combinedLine . PHP_EOL;

        fclose($handle);
    } else {
        echo "Error opening file!";
    }

    $handle = fopen($filename, "r");
    $combinedLine = "";
    if ($handle) {
        $line1 = fgets($handle);
        $line2 = rtrim(fgets($handle));
        fclose($handle);

        $combinedLine = trim($line1 . " " . $line2);

        echo $combinedLine . PHP_EOL;
    } else {
        echo "Error opening file!";
    }

    ?>

</body>





</html>
