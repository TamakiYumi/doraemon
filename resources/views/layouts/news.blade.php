<!DOCTYPE html>
@include('parts.header')
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ブログ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- 見出し用フォント -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="#">申し込む</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="#">Large</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" focusable="false" role="img"><title>検索</title><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="#">申込</a>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="blog-nav d-flex justify-content-between">
        <a class="text-muted" href="#">世界</a>
        <a class="text-muted" href="#">日本</a>
        <a class="text-muted" href="#">テクノロジー</a>
        <a class="text-muted" href="#">デザイン</a>
        <a class="text-muted" href="#">文化</a>
        <a class="text-muted" href="#">ビジネス</a>
        <a class="text-muted" href="#">政治</a>
        <a class="text-muted" href="#">意見</a>
        <a class="text-muted" href="#">科学</a>
        <a class="text-muted" href="#">健康</a>
        <a class="text-muted" href="#">スタイル</a>
        <a class="text-muted" href="#">旅行</a>
      </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">ドラ実のニュース</h1>
        <p class="lead my-3">メンバーを形成する複数行のテキスト、この記事の内容の中で最も興味深いものについて迅速かつ効率的に新しい読者に知らせる。</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">続きを読む...</a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">世界</strong>
            <h3 class="mb-0">おすすめ記事</h3>
            <div class="mb-1 text-muted">11月12日</div>
            <p class="card-text mb-auto">これは、追加コンテンツへの自然なリードインとして以下のテキストをサポートして、より広いカードです。このコンテンツは少し長いです。</p>
            <a href="#" class="stretched-link">続きを読む</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>プレースホルダ</title><rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text></svg>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">デザイン</strong>
            <h3 class="mb-0">記事のタイトル</h3>
            <div class="mb-1 text-muted">11月11日</div>
            <p class="mb-auto">これは、追加コンテンツへの自然なリードインとして以下のテキストをサポートして、より広いカードです。</p>
            <a href="#" class="stretched-link">続きを読む</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>プレースホルダ</title><rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text></svg>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          Firehoseから
        </h3>
        <div class="blog-post">
          <h2 class="blog-post-title">ブログの投稿例</h2>
          <p class="blog-post-meta">2014/01/01　投稿者：<a href="#">管理人</a></p>
          <p>このブログ記事では、Bootstrapに対応しており、スタイルが設定されたいくつかの異なるタイプのコンテンツを紹介している。基本的な文字の体裁、画像、およびコードはすべてサポート済み。</p>
          <hr>
          <p>文章に特に深い意味はありません。この組見本は自由に複製したり頒布することができます。このダミーテキストは自由に改変することが出来ます。ダミーテキストはダミー文書やダミー文章とも呼ばれることがあります。書体やレイアウトなどを確認するために用います。ダミーテキストはダミー文書やダミー文章とも呼ばれることがあります。</p>
          <p>このダミーテキストは自由に改変することが出来ます。この組見本は自由に複製したり頒布することができます。このダミーテキストは自由に改変することが出来ます。本文用なので使い方を間違えると不自然に見えることもありますので要注意。</p>
          <blockquote class="blockquote">
            <p><a href="http://rooms.webcrow.jp/text.htm" target="_blank" rel="noopener">ダミーテキストジェネレータ</a>で作成</p>
          </blockquote>
          <h2>見出し</h2>
          <p>カタカナ語が苦手な方は「組見本」と呼ぶとよいでしょう。ダミーテキストはダミー文書やダミー文章とも呼ばれることがあります。このダミーテキストは自由に改変することが出来ます。この組見本は自由に複製したり頒布することができます。</p>
          <h3>小見出し</h3>
          <p>主に書籍やウェブページなどのデザインを作成する時によく使われます。書体やレイアウトなどを確認するために用います。なお、組見本の「組」とは文字組のことです。活字印刷時代の用語だったと思います。</p>
          <pre><code>コードブロックの例</code></pre>
          <p>書体やレイアウトなどを確認するために用います。主に書籍やウェブページなどのデザインを作成する時によく使われます。文章に特に深い意味はありません。</p>
          <h3>小見出し</h3>
          <p>段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。</p>
          <ul>
            <li>番号なしリストの文章です。番号なしリストの文章です。</li>
            <li>番号なしリストの文章です。番号なしリストの文章です。</li>
            <li>番号なしリストの文章です。番号なしリストの文章です。</li>
          </ul>
          <p>段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。</p>
          <ol>
            <li>番号付きリストの文章です。番号付きリストの文章です。</li>
            <li>番号付きリストの文章です。番号付きリストの文章です。</li>
            <li>番号付きリストの文章です。番号付きリストの文章です。</li>
          </ol>
          <p>段落の文章です。段落の文章です。段落の文章です。段落の文章です。段落の文章です。</p>
        </div><!-- /.blog-post -->
        <div class="blog-post">
          <h2 class="blog-post-title">坊ちゃん</h2>
          <p class="blog-post-meta">2013/12/23　投稿者：<a href="#">夏目</a></p>
          <p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
<p>なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。弱虫やーい。と囃したからである。小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、この次は抜かさずに飛んで見せますと答えた。</p>
        </div><!-- /.blog-post -->
        <div class="blog-post">
          <h2 class="blog-post-title">吾輩は猫である</h2>
          <p class="blog-post-meta">2013/12/14　投稿者：<a href="#">夏目</a></p>
          <p>吾輩は猫である。名前はまだ無い。</p>
          <p>どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。</p>
          <p>掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙を吹く。どうも咽せぽくて実に弱った。これが人間の飲む煙草というものである事はようやくこの頃知った。</p>
          <p>この書生の掌の裏でしばらくはよい心持に坐っておったが、しばらくすると非常な速力で運転し始めた。書生が動くのか自分だけが動くのか分らないが無暗に眼が廻る。胸が悪くなる。到底助からないと思っていると、どさりと音がして眼から火が出た。それまでは記憶しているがあとは何の事やらいくら考え出そうとしても分らない。</p>
          <p>ふと気が付いて見ると書生はいない。たくさんおった兄弟が一疋も見えぬ。肝心の母親さえ姿を隠してしまった。その上今までの所とは違って無暗に明るい。眼を明いていられぬくらいだ。はてな何でも容子がおかしいと、のそのそ這い出して見ると非常に痛い。吾輩は藁の上から急に笹原の中へ棄てられたのである。</p>
          <p>ようやくの思いで笹原を這い出すと向うに大きな池がある。吾輩は池の前に坐ってどうしたらよかろうと考えて見た。別にこれという分別も出ない。しばらくして泣いたら書生がまた迎に来てくれるかと考え付いた。ニャー、ニャーと試みにやって見たが誰も来ない。そのうち池の上をさらさらと風が渡って日が暮れかかる。腹が非常に減って来た。泣きたくても声が出ない。仕方がない、何でもよいから食物のある所まであるこうと決心をしてそろりそろりと池を左りに廻り始めた。どうも非常に苦しい。そこを我慢して無理やりに這って行くとようやくの事で何となく人間臭い所へ出た。</p>
          <p>ここへ這入ったら、どうにかなると思って竹垣の崩れた穴から、とある邸内にもぐり込んだ。縁は不思議なもので、もしこの竹垣が破れていなかったなら、吾輩はついに路傍に餓死したかも知れんのである。一樹の蔭とはよく云ったものだ。この垣根の穴は今日に至るまで吾輩が隣家の三毛を訪問する時の通路になっている。さて邸へは忍び込んだもののこれから先どうして善いか分らない。そのうちに暗くなる、腹は減る、寒さは寒し、雨が降って来るという始末でもう一刻の猶予が出来なくなった。仕方がないからとにかく明るくて暖かそうな方へ方へとあるいて行く。今から考えるとその時はすでに家の内に這入っておったのだ。</p>
          <p>ここで吾輩は彼の書生以外の人間を再び見るべき機会に遭遇したのである。第一に逢ったのがおさんである。これは前の書生より一層乱暴な方で吾輩を見るや否やいきなり頸筋をつかんで表へ抛り出した。いやこれは駄目だと思ったから眼をねぶって運を天に任せていた。しかしひもじいのと寒いのにはどうしても我慢が出来ん。吾輩は再びおさんの隙を見て台所へ這い上った。すると間もなくまた投げ出された。吾輩は投げ出されては這い上り、這い上っては投げ出され、何でも同じ事を四五遍繰り返したのを記憶している。その時におさんと云う者はつくづくいやになった。この間おさんの三馬を偸んでこの返報をしてやってから、やっと胸の痞が下りた。吾輩が最後につまみ出されようとしたときに、この家の主人が騒々しい何だといいながら出て来た。下女は吾輩をぶら下げて主人の方へ向けてこの宿なしの小猫がいくら出しても出しても御台所へ上って来て困りますという。主人は鼻の下の黒い毛を撚りながら吾輩の顔をしばらく眺めておったが、やがてそんなら内へ置いてやれといったまま奥へ這入ってしまった。主人はあまり口を聞かぬ人と見えた。下女は口惜しそうに吾輩を台所へ抛り出した。かくして吾輩はついにこの家を自分の住家と極める事にしたのである。</p>
        </div><!-- /.blog-post -->
        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">前ページ</a>
          <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">次ページ</a>
        </nav>
      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="font-italic">概要</h4>
          <p class="mb-0">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
        <div class="p-4">
          <h4 class="font-italic">過去ログ</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">2014年01月</a></li>
            <li><a href="#">2013年12月</a></li>
            <li><a href="#">2013年11月</a></li>
            <li><a href="#">2013年10月</a></li>
            <li><a href="#">2013年09月</a></li>
            <li><a href="#">2013年08月</a></li>
            <li><a href="#">2013年07月</a></li>
            <li><a href="#">2013年06月</a></li>
            <li><a href="#">2013年05月</a></li>
            <li><a href="#">2013年04月</a></li>
            <li><a href="#">2013年03月</a></li>
            <li><a href="#">2013年02月</a></li>
          </ol>
        </div>
        <div class="p-4">
          <h4 class="font-italic">他の場所</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->
    </div><!-- /.row -->
  </main>

  <div class="content">
    <footer class="blog-footer">
      @include('parts.footer')
    </footer>
  </div><!-- /.content -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
</body>

</html>