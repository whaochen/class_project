<?php
$firstname = 'Hao';
$lastname = 'Chen';
$eng_name = $firstname .' ' . $lastname; 

$name = '陳晧';
$birth = 1968;
$age = date('Y',time())-$birth+1;
$photo = 'image/head1.jpg';

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
    <h1>自我介紹</h1>
    <p>英文姓名：{$eng_name}</p>
    <p>姓名：{$name}</p>
    <p>年齡：{$age}</p>
    <p><img src="{$photo}"></p>   
</body>
</html>

HEREDOC;

echo $html;
?>