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
    $db = mysqli_connect('localhost', 'root', '') or die('Unable to connect. Check your connection parameters.');

    mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

    $query = 'SELECT 
            movie_leadactor, movie_director 
            from 
                movie';
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while ($row = mysqli_fetch_array($result)) {
        extract($row);
        echo $movie_leadactor . ' - ' . $movie_director . '<br/>';
    }
    ?>
</body>

</html>