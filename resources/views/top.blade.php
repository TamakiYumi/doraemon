<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>カルーセル</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <header>
    @include('parts.header')
  </header>

  <!-- カルーセル
    ================================================== -->
  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- インジケータ -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>見出しの例。</h1>
              <p>カルーセルの1番目のスライドの代表的なプレースホルダーコンテンツ。</p>
              <p><a class="btn btn-primary" href="#">本日登録</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption">
              <h1>別の見出しの例。</h1>
              <p>カルーセルの2番目のスライドの代表的なプレースホルダーコンテンツ。</p>
              <p><a class="btn btn-primary" href="#">もっと学ぼう</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>もう1つ良い指標。</h1>
              <p>カルーセルの3番目のスライドの代表的なプレースホルダーコンテンツ。</p>
              <p><a class="btn btn-primary" href="#">ギャラリーを閲覧</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">前へ</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">次へ</span>
      </a>
    </div><!-- /.carousel -->

    <!-- マーケティングメッセージングとフィーチャー
      ================================================== -->
    <!-- 残りのページを別のコンテナで囲んで、すべてのコンテンツを中央に配置 -->
    <div class="container marketing">
      <!-- カルーセルの下にある3列のテキスト -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><title>一般的なプレースホルダ画像</title><rect fill="#777" width="100%" height="100%"/></svg>
          <h2>見出し</h2>
          <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
          <p><a class="btn btn-secondary" href="#">詳細を見る &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><title>一般的なプレースホルダ画像</title><rect fill="#777" width="100%" height="100%"/></svg>
          <h2>見出し</h2>
          <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
          <p><a class="btn btn-secondary" href="#">詳細を見る &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><title>一般的なプレースホルダ画像</title><rect fill="#777" width="100%" height="100%"/></svg>
          <h2>見出し</h2>
          <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
          <p><a class="btn btn-secondary" href="#">詳細を見る &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- フィーチャーを開始 -->
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">最初のフィーチャータイトル。<span class="text-muted">それはあなたの心を吹き飛ばすだろう。</span></h2>
          <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><title>一般的なプレースホルダ画像</title><rect fill="#eee" width="100%" height="100%"/><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">ああ、それは良いことだ。<span class="text-muted">自分で見て。</span></h2>
          <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><title>一般的なプレースホルダ画像</title><rect fill="#eee" width="100%" height="100%"/><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">そして、最後に、これ。<span class="text-muted">チェックメイト。</span></h2>
          <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><title>一般的なプレースホルダ画像</title><rect fill="#eee" width="100%" height="100%"/><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
        </div>
      </div>

      <hr class="featurette-divider">
      <!-- /フィーチャーを終了 -->

    </div><!-- /.container -->
  </main>

  <!-- フッタ -->
  <footer class="container">
    @include('parts.footer')
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
</body>

</html>