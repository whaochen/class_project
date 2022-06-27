<?php

date_default_timezone_set('Asia/Taipei');
$num1 = mt_rand(1,9);
$num2 = mt_rand(1,9);
$num3 = date('w',time());
$pic1 = 'images/' . $num1 . '.jpg';
$pic2 = 'images/' . $num2 . '.jpg';
$pic3 = 'images/' . $num3 . '.jpg';
$now = date('Y-m-d H:i:s',time());

$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>幸運數字</h1>
    <p><img src = "{$pic1}"></p>
    <p><img src = "{$pic2}"></p>
    <p><img src = "{$pic3}"></p>
    <p>現在時間：{$now}</p>
    <p><a href="?">再執行一次</a></p>   
</body>
</html>
HEREDOC;

echo $html;
?>