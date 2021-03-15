<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="{{ route('top') }}">ドラ実</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class='nav-link' href="{{ url('tweets') }}">タイムライン</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="{{ route('news') }}">ニュース</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">アイテム一覧</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('items') }}">アイテム</a>
                <a class="dropdown-item" href="#">リンク2</a>
                <a class="dropdown-item" href="#">リンク3</a>
              </div>
            </li>
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto align-items-center">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <!-- 追加 -->
                  <li class="nav-item mr-5">
                      <a href="{{ url('tweets/create') }}" class="btn btn-md btn-primary">ツイートする</a>
                  </li>
                  <li class="nav-item">
                      <img src="{{ asset('storage/profile_image/' .auth()->user()->profile_image) }}" class="rounded-circle" width="50" height="50">
                  </li>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ auth()->user()->name }} <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a href="{{ url('users/' .auth()->user()->id) }}" class="dropdown-item">プロフィール</a>
                          <a href="{{ route('logout') }}" class="dropdown-item"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
  
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control mr-sm-2" type="search" placeholder="検索..." aria-label="検索...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
          </form>
        </div>
      </div>
    </nav>
  </header>