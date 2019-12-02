<?php

require_once('function.php');

// それぞれの回答の変数定義とvalueの取得
$check1 = $_POST['check1'];
$check2 = $_POST['check2'];
$check3 = $_POST['check3'];
$check4 = $_POST['check4'];
$check5 = $_POST['check5'];
$check6 = $_POST['check6'];
$check7 = $_POST['check7'];
// 合計値
$all_check_sum = $check1+$check2+$check3+$check4+$check5+$check6+$check7;
echo($all_check_sum);

// 合計値によって表示を変える文
// if(1 <= $all_check_sum && 7<= $all_check_sum){
//   print('あなたの職業は遊び人です');
// }elseif(8<= $all_check_sum && $all_check_sum<= 14){
//   print('あなたの職業は僧侶です');
// }elseif(15<= $all_check_sum && $all_check_sum<= 21){
//   print('あなたの職業は武闘家です');
// }else{
//   print('あなたの職業は戦士です');
// }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/answer.css">
  <title>Document</title>
</head>
<body>
<p>あなたに適した職業は、、、</p>
  <p></p>
  <?php if(1 <= $all_check_sum &&  $all_check_sum <= 7 ): ?>
  <img src="img/asobininn.jpeg">
  <p>遊び人です</p>
  <?php elseif(8<= $all_check_sum && $all_check_sum<= 14): ?>
  <img src="img/僧侶.jpg">
  <p>僧侶です</p>
  <?php elseif(15<= $all_check_sum && $all_check_sum<= 21): ?>
  <img src="img/武闘家.jpg">
  <p>武闘家です</p>
  <?php else: ?>
  <img src="img/戦士.jpg">
  <p>戦士です</p>
  <?php endif; ?>
  
</body>
</html>