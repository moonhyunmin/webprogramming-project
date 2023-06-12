<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set('asia/Seoul');
    $currentTime = date("H");

    if ($currentTime >= 6 && $currentTime < 12) {
        $message = "Good Morning!";
    } elseif ($currentTime >= 12 && $currentTime < 18) {
        $message = "Good Afternoon!";
    } else {
        $message = "Good Evening!";
    }
    echo $message;
    ?>
</body>

</html>