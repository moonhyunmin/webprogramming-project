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
    $apiUrl = 'https://api.odcloud.kr/api/15077586/v1/centers';
    $page = 1;
    $perPage = 10;
    $serviceKey = 'data-portal-test-key';

    $url = $apiUrl . "?page=$page&perPage=$perPage&serviceKey=$serviceKey";

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if ($response === false) {
        die("cURL 호출 오류: " . curl_error($curl));
    }

    echo $response;

    curl_close($curl);
    ?>
</body>

</html>