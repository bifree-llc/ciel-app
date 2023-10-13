<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/app.css">
  @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
  <header>
    <div class="container"></div>
  </header>
  <main>
    <div class="container">
      <div class="mainView">
        <h2>
          北の大地でなりたいあなたになるために
        </h2>
        <div class="joinBtn">
          <p>登録はこちらから</p>
        </div>
      </div>

      <!-- 求人一覧 -->
      <div class="topWorks">
        <h3>
          あなたにぴったりの求人見つかる
        </h3>
        <ul class="topWorks-list">
          <li class="topWorks-list__item">スカウトサービス</li>
          <li class="topWorks-list__item">WEB履歴書添削</li>
          <li class="topWorks-list__item">
            <b>ジョブカウンセラー</b>
          </li>
        </ul>
        <div class="moreBtn">
          <p>もっと見る</p>
        </div>
      </div>

      <div class="interviews">
        <h3>
          読んで見つけよう素敵な企業
        </h3>
        <ul class="topInterview-list">
          <li class="topInterview-list__item"></li>
          <li class="topInterview-list__item"></li>
          <li class="topInterview-list__item"></li>
        </ul>
      </div>
      <div class="moreBtn">
        <p>もっと見る</p>
      </div>
    </div>
  </main>
  <footer>
    <div class="container"></div>
  </footer>
</body>
</html>