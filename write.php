<?php
// 書き込み内容
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$time = date("Y-m-d H:i:s");

//入力文字の集約
$data = $name .$email .$password .$address . $time. "\n"; //「\n」はテキスト内の改行

//該当ファイルへの書き込み
file_put_contents("data\data.txt",$data,FILE_APPEND);
?>

<html>

    <head>
        <meta charset="utf-8">
        <title>File書き込み</title>
    </head>

    <body>

        <h1>書き込みしました。</h1>
        <h2>./data/data.txt を確認しましょう！</h2>

        <ul>
            <li><a href="read.php">確認する</a></li>
            <li><a href="index.php">戻る</a></li>
        </ul>
    </body>

</html>
