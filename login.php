<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "member";


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}


if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "INSERT INTO member1 (id, pw) VALUES ('$username', '$password')";
    $result = $conn->query($query);

    if ($result) {
        echo "회원가입이 완료되었습니다.";
    } else {
        echo "회원가입 중 오류가 발생했습니다.";
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM member1 WHERE id='$username' AND pw='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        echo "로그인 성공!";
    } else {
        echo "로그인 실패. 사용자 이름 또는 비밀번호가 일치하지 않습니다.";
    }
}


if (isset($_GET['logout'])) {

    echo "로그아웃 되었습니다.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>로그인/회원가입</title>
</head>

<body>
    <h1>회원가입</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="사용자 이름" required><br>
        <input type="password" name="password" placeholder="비밀번호" required><br>
        <button type="submit" name="signup">회원가입</button>
    </form>

    <h1>로그인</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="사용자 이름" required><br>
        <input type="password" name="password" placeholder="비밀번호" required><br>
        <button type="submit" name="login">로그인</button>
    </form>

    <h1>로그아웃</h1>
    <a href="?logout=true">로그아웃</a>
</body>

</html>