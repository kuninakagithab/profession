<?php
// 呼び込み
// 
require_once('function.php');

// ①POST送信でない場合返す処理
// POST送信でない場合にindex.phpに返す処理
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  header('Location: index.php');
};

// ②nicknameがからのとき返す
//変数を定義して index.phpにあるnicknameを取得
$nickname = $_POST['nickname'];
// $nicknameが空っぽだったらindex.phpに返す処理
if ($nickname === '') {
  header('Location: error.php');
};
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <title>DQ</title>
</head>

<body>
<div class="welcomebox">
      <p>ようこそ<?php echo(h($nickname).'さん！！'); ?></p>
      <p>以下の質問に答えて、<?php echo(h($nickname).'さん'); ?>さんに適した職業を診断してみよう</p>
    </div>
  <div class="container">
    <form action="answer.php" method="POST">
    <input type="hidden" name="nickname" value ="<?php $nickname ?>">
      <div class="q1 box">
        <p class="question">好きな趣味は？？</p>
        <div class="cbox">
          <div><input type="radio" name="check1" value="4" checked="checked">スポーツ</div>
          <div><input type="radio" name="check1" value="3">カラオケ・イベント</div>
          <div><input type="radio" name="check1" value="2">読書・音楽鑑賞</div>
          <div><input type="radio" name="check1" value="1">とにかく酒！！！</div>
        </div>
      </div>
      <div class="q2 box">
        <p class="question">100万あったら？？</p>
        <div class="cbox">
          <div><input type="radio" name="check2" value="3" checked="checked">筋トレ器具を買う</div>
          <div><input type="radio" name="check2" value="1">飲んだことのない酒を買い占める</div>
          <div><input type="radio" name="check2" value="4">家族に分ける</div>
          <div><input type="radio" name="check2" value="2">貯金</div>
        </div>
      </div>
      <div class="q3 box">
        <p class="question">レジャーといえば？？</p>
        <div class="cbox">
          <div><input type="radio" name="check3" value="2" checked="checked">川</div>
          <div><input type="radio" name="check3" value="4">山</div>
          <div><input type="radio" name="check3" value="3">海</div>
          <div><input type="radio" name="check3" value="1">レジャーなんかしてないで酒！！！</div>
        </div>
      </div>
      <div class="q4 box">
        <p class="question">自慢なことは？？</p>
        <div class="cbox">
          <div><input type="radio" name="check4" value="4" checked="checked">人付き合いが得意！！</div>
          <div><input type="radio" name="check4" value="1">酒の一気飲み！！</div>
          <div><input type="radio" name="check4" value="3">体力自慢。向かうところ敵なし！！</div>
          <div><input type="radio" name="check4" value="2">頭の回転が早い！！</div>
        </div>
      </div>
      <div class="q5 box">
        <p class="question">飲み会での立ち位置は？？</p>
        <div class="cbox">
          <div><input type="radio" name="check5" value="2" checked="checked">普通の参加者</div>
          <div><input type="radio" name="check5" value="1">飲みすぎる厄介なやつ</div>
          <div><input type="radio" name="check5" value="4">司会</div>
          <div><input type="radio" name="check5" value="3">幹事</div>
        </div>
      </div>
      <div class="q6 box">
        <p class="question">好きな映画は？？</p>
        <div class="cbox">
          <div><input type="radio" name="check6" value="2" checked="checked">ラブストーリー映画</div>
          <div><input type="radio" name="check6" value="1">ファンタジー映画</div>
          <div><input type="radio" name="check6" value="4">アクション映画</div>
          <div><input type="radio" name="check6" value="3">推理映画</div>
        </div>
      </div>
      <div class="q7 box">
        <p class="question">好きな食べ物は？？</p>
        <div class="cbox">
          <div><input type="radio" name="check7" value="4" checked="checked">肉</div>
          <div><input type="radio" name="check7" value="2">野菜</div>
          <div><input type="radio" name="check7" value="3">米</div>
          <div><input type="radio" name="check7" value="1">あまり食べ物は食べない</div>
        </div>
      </div>
      <div class="button">
        <button type="submit">結果を見る！！</button>
      </div>
    </form>
  </div>
</body>

</html>