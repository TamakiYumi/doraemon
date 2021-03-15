<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    {{-- 後の章で説明します --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
    <title>@yield('title')</title>
    
    <!-- Scripts -->
    {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    {{-- この章の後半で作成するCSSを読み込みます --}}
    <link href="{{ secure_asset('css/base.css') }}" rel="stylesheet">
</head>

<body>
    <main class="py-4">
    {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
    @yield('content')
    <div class = "main">
        <div class = "container">
            <div class="mx-auto" style="width: 200px;">
                <div class = "header">
                    <h2>イベント情報</h2>
                    <h3>EVENT</h3>
                </div>
                <div class="card-container">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
                        <h2 class="card-title">モデルハウス「Obscure」オープンのお知らせ</h2>
                        <p class="card-text">日時：期間XX月XX日〜（X曜日・X曜日定休日）見学予定時間：XX：XX〜XX：XX</p>
                        <a href="" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
                        <h2 class="card-title">「Tryangle」夜の見学会のお知らせ</h2>
                        <p class="card-text">日時：期間XX月XX日〜（X曜日・X曜日定休日）見学予定時間：XX：XX〜XX：XX</p>
                        <a href="" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
                        <h2 class="card-title">モデルハウス「hachi　〜和気〜」オーナー様宅見学会のお知らせ</h2>
                        <p class="card-text">日時：期間XX月XX日〜（X曜日・X曜日定休日）見学予定時間：XX：XX〜XX：XX</p>
                        <a href="" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>  
        </div>  
    </div>  
    </main>
</body>
</html>