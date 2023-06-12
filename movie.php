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

    $user = 'root';
    $pass = '';
    $db = 'mytestdb';

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable");

    $db = mysqli_connect('localhost', 'root', '', 'moviesite') or die("Unable to connect!");

    echo "It's connected now!";

    //$query = 'CREATE DATABASE IF NOT EXISTS moviesite';
    //mysqli_query($db, $query) or die(mysqli_error($db));

    //mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

    $query = 'CREATE TABLE movie(
        movie_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        movie_name VARCHAR(255) NOT NULL,
        movie_type TINYINT NOT NULL DEFAULT 0,
        movie_year SMALLINT UNSIGNED NOT NULL DEFAULT 0,
        movie_leadactor INTEGER UNSIGNED NOT NULL DEFAULT 0,
        movie_director INTEGER UNSIGNED NOT NULL DEFAULT 0,

        PRIMARY KEY (movie_id),
        KEY movie_type (movie_type, movie_year)
    )ENGINE=MyISAM';

    //mysqli_query($db, $query) or die(mysqli_error($db));

    $query = 'CREATE TABLE movietype(
        movietype_id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
        movietype_label VARCHAR(100) NOT NULL,
        PRIMARY KEY(movietype_id)
        )
        ENGINE=MyISAM';
    //mysqli_query($db, $query) or die(mysqli_error($db));

    $query = 'CREATE TABLE people(
        people_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        people_fullname VARCHAR(255) NOT NULL,
        people_isactor TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
        people_isdirector TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,

        PRIMARY KEY(people_id)
        )
        ENGINE=MyISAM';
    //mysqli_query($db, $query) or die(mysqli_error($db));

    echo 'Movie database successfully created!';
    ?>
</body>

</html>