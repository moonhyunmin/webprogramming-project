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
    session_start();

    date_default_timezone_set('asia/Seoul');
    $currentTime = date("H:m:s");

    if (isset($_SESSION['page_loads'])) {
        $_SESSION['page_loads']++;
    } else {
        $_SESSION['page_loads'] = 1;
    }

    $pageLoads = $_SESSION['page_loads'];

    echo "current time : $currentTime<br>";
    echo "Page load time : $pageLoads";
    ?>
</body>

</html>