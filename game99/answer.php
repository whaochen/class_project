<?php

$a = isset($_GET['a']) ? $_GET['a'] : 1; //如果有資料就帶資料，沒有就預設為1
$b = isset($_GET['b']) ? $_GET['b'] : 1; //isset請問裡面的變數有無定義，?true帶a : false帶1
// $a = $_GET['a']; //GET(寫在網址)，POST(表單)
// $b = $_GET['b'];
$ans = $a * $b ;

$n1 = $ans % 10;  //個位數
$n2 = floor($ans / 10);  //十位數

$n1_pic = 'images/' .$n1 .'.jpg';
$n2_pic = 'images/' .$n2 .'.jpg';

// floor(x) 取底（向下取整) (去尾)
// ceil(x) 取頂（向上取整) (進位)
// round(x) 四捨五入

// 補充
if( $n2==0 )
{
   $n2_pic = '';
}
else
{
   $n2_pic = '<img src="images/' . $n2 . '.jpg">';
}

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>九九乘法CAI練習</title>
</head>
<body>
<h1>九九乘法CAI練習</h1>
<p> {$a} 乘以 {$b} 等於 {$ans}</p>
<p><img src="{$n2_pic}"><img src="{$n1_pic}"></p>
<p><a href="question.php">下一題</a></p>

</body>
</html>

HEREDOC;

echo $html;

?>