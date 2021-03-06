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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
            <li class="nav-item">
                  <a class="nav-link" href="{{ route('items') }}">アイテム</a>
            </li>
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto align-items-center">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('会員登録') }}</a>
                      </li>
                  @endif
              @else

                  <li class="nav-item mr-5">
                      <a href="{{ url('tweets/create') }}" class="btn btn-md btn-primary">ツイートする</a>
                  </li>
                  <li class="nav-item">
                    <i>
                      <img src="{{ asset('storage/profile_image/' .auth()->user()->profile_image) }}" class="rounded-circle" id="header-icon">
                    </i>
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
                              {{ __('ログアウト') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
        </div>
    </nav>
  </header>