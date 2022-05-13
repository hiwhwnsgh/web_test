<?php
    $servername = 'localhost';
    $username = 'ChoJunHo';  # MySQL 계정 아이디
    $password = 'whdyd455'; # MySQL 계정 패스워드
    $db = "test"; #DB이름 
    $dbChar = "utf8"; // 문자 인코딩

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db;charset=$dbChar", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
     catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

?>