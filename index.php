<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>DQ</title>
</head>
<body>
  <div class="bgcontainer">
    <div class="container">
      <header>
        <div class="hbox">
          <img src="img/スライムアイコン.png" alt="notfound">
          <h1>職業診断</h1>
          <img src="img/スライムアイコン.png" alt="notfound">
        </div>
      </header>
      <main>
        <p>もしもあなたがドラクエの世界に迷い込んでしまったら、どんな職業か適しているか診断してみよう!</p>
      </main>
      <form action="check.php" method="POST">
        <p>ニックネームを入力してスタートボタンをクリック！！</p>
        <div class="inputbox">
          <span>ニックネーム：</span>
          <input type="text" name="nickname">
        </div>
        <button type="submit">スタート</button>
      </form>
    </div>
  </div>
  </body>
  </html>