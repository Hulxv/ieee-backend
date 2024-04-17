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

    $timezone = "Asia/Riyadh";
    $now = new DateTime('now', new DateTimeZone($timezone));

    printf("%s <br>", $now->getTimezone()->getName() . PHP_EOL);
    printf("%s <br>", $now->format('D, d M y - h:i:s A') . PHP_EOL);
    printf("%s <br>", $now->format('l, d F Y - h:i:s A') . PHP_EOL);
    ?>

    <?php

    $dateString = "2005-10-02";

    $dateTime = new DateTime($dateString);
    $dateTime->setTimezone(new DateTimeZone('Africa/Cairo'));

    printf("%s <br>", $dateTime->getTimezone()->getName());

    $dateTime->add(new DateInterval('PT15H15M15S'));

    $formattedDate = $dateTime->format('Y, F, l \"j\n\d\" h:i:s');

    printf("%s <br>", $formattedDate);

    ?>
    <?php

    $dateString = "1990-10-01";
    $timestamp = strtotime($dateString);

    $secondsSinceEpoch = $timestamp - 0; // 0 is the epoch timestamp
    $daysSinceEpoch = $secondsSinceEpoch / 86400; // 86400 seconds per day
    $yearsSinceEpoch = $daysSinceEpoch / 365; // Assuming 365 days per year (ignoring leap years)
    
    printf("From Epoch Time Till 1990-10-01 Is Approximately %s Days <br>", $daysSinceEpoch);
    printf("From Epoch Time Till 1990-10-01 Is Approximately %s Years <br>", round($yearsSinceEpoch, 2));

    ?>
    <?php

    $dateString = "1990-10-01";
    $epochDate = new DateTime('1970-01-01');
    $givenDate = new DateTime($dateString);

    $dateDiff = $givenDate->diff($epochDate);

    $daysSinceEpoch = $dateDiff->days;
    $yearsSinceEpoch = $dateDiff->y + $dateDiff->m / 12;

    printf("From Epoch Time Till 1990-10-01 Is Approximately %s Days <br>", $daysSinceEpoch);
    printf("From Epoch Time Till 1990-10-01 Is Approximately %s Years <br>", round($yearsSinceEpoch, 2));
    ?>

    <?php


    $microtime = microtime(true);
    $timestamp = floor($microtime);
    printf("Timestamp: %s <br>", $timestamp);


    $timestamp = date('U');
    printf("Timestamp: %s <br>", $timestamp);

    $timeData = gettimeofday();
    $timestamp = $timeData['sec'];
    printf("Timestamp: %s <br>", $timestamp);

    ?>

</body>





</html>
