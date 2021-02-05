<!DOCTYPE html>
@include('parts.header')
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>製品紹介</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        <!-- <span>会社名</span> -->
      </a>
      <a class="py-2 d-none d-md-inline-block" href="#">ツアー</a>
      <a class="py-2 d-none d-md-inline-block" href="#">製品</a>
      <a class="py-2 d-none d-md-inline-block" href="#">特徴</a>
      <a class="py-2 d-none d-md-inline-block" href="#">エンタープライズ</a>
      <a class="py-2 d-none d-md-inline-block" href="#">サポート</a>
      <a class="py-2 d-none d-md-inline-block" href="#">価格</a>
      <a class="py-2 d-none d-md-inline-block" href="#">カート</a>
    </div>
  </nav>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">軽快な見出し</h1>
      <p class="lead font-weight-normal">そして、起動するための軽めの小見出し。Appleのマーケティングのページに基づいて、この例でのマーケティング活動を開始してください。</p>
      <a class="btn btn-outline-secondary" href="#">近日公開</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex w-100 my-md-3 pl-md-3">
    <div class=" flex-md-fill bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex w-100 my-md-3 pl-md-3">
    <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="flex-md-fill bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex w-100 my-md-3 pl-md-3">
    <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex w-100 my-md-3 pl-md-3">
    <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="flex-md-fill bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">別の見出し</h2>
        <p class="lead">そして、さらに軽めの小見出し。</p>
      </div>
      <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>特徴</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">クールなスタッフ</a></li>
          <li><a class="text-muted" href="#">ランダム機能</a></li>
          <li><a class="text-muted" href="#">チームの特徴</a></li>
          <li><a class="text-muted" href="#">開発者向け</a></li>
          <li><a class="text-muted" href="#">もう一つ</a></li>
          <li><a class="text-muted" href="#">最終回</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>リソース</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">リソース</a></li>
          <li><a class="text-muted" href="#">リソース名</a></li>
          <li><a class="text-muted" href="#">別のリソース</a></li>
          <li><a class="text-muted" href="#">最終的リソース</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>リソース</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">ビジネス</a></li>
          <li><a class="text-muted" href="#">教育</a></li>
          <li><a class="text-muted" href="#">政府</a></li>
          <li><a class="text-muted" href="#">ゲーム</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>概要</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">チーム</a></li>
          <li><a class="text-muted" href="#">場所</a></li>
          <li><a class="text-muted" href="#">プライバシー</a></li>
          <li><a class="text-muted" href="#">条項</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  //JavaScriptプラグインの設定など
</body>

</html>