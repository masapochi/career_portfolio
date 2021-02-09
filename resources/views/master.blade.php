<!DOCTYPE html>
<html lang="ja">
@php
  // dd($skills);
@endphp

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow">

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[
          0
        ],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NTVPCDX');

  </script>
  <!-- End Google Tag Manager -->

  <title></title>
  <meta name="description" content="">
  <link href="https://masapochi.me/" rel="canonical">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@__masapochi__">
  <meta name="twitter:creator" content="@__masapochi__">
  <meta name="twitter:url" content="https://masapochi.me/">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="https://masapochi.me/">

  <!-- Facebook OGP -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name" content="masapochi.me">
  <meta property="og:url" content="https://masapochi.me/">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="https://masapochi.me/">

  <!-- Css -->
  {{-- <link href="https://cdn.jsdelivr.net/npm/cssremedy@0.1.0-beta.2/css/remedy.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"> --}}
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTVPCDX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <a class="navbar-brand" href="{{ config('app.url') }}">{{ config('app.name') }}</a>
      <button class="navbar-burger" role="button" aria-label="menu" aria-expanded="false">
        <span class="navbar-burger-bar" aria-hidden="true"></span>
        <span class="navbar-burger-bar" aria-hidden="true"></span>
        <span class="navbar-burger-bar" aria-hidden="true"></span>
      </button>

      <div class="navbar-menu">
        @foreach($menus as $menu)
          <a class="navbar-link" href="#{{ $menu->href }}">{{ $menu->label }}</a>
        @endforeach
      </div>
    </nav>
  </header>

  <main>

    <section class="home section" id="home">
      <h1 class="home__title">Home</h1>
      <h2 class="home__subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
      </h2>

      <video class="home__video" poster="{{ asset('./movies/hero_poster.png') }}" preload playsinline autoplay muted loop>
        <source src="{{ asset('./movies/hero.mp4') }}" type="video/mp4">
      </video>
    </section>

    <section class="section">
      <div class="container">
        <h2 class="text-center">I’m a Japan based Frontend & Backend developer, UI/UX designer<br>focused on crafting clean & user‑friendly experiences.</h2>
      </div>
    </section>

    <section class="section" id="services">
      <div class="container">
        <h1 class="title">Services</h1>
        <div class="contents">
          @foreach($services as $service)

            <section class="content">
              <img src="{{ asset("./images/{$service->file}") }}" alt="{{ $service->label }} {{ $service->desc }}" width="" height="" loading="lazy" decoding="async">
              <h2 class="font-serif">{{ $service->label }}</h2>
              <p>{{ $service->desc }}</p>
            </section>
          @endforeach

        </div>
      </div>
    </section>

    <section class="section" id="works">
      <div class="container">
        <h1 class="title">Works</h1>
        <div class="contents">
          @foreach($works as $work)

            <section class="content">
              <img src="{{ asset("./images/{$work->image}") }}" alt="{{ $work->title }}" width="1206" height="630" loading="lazy" decoding="async">
              <div>
                <h1>{{ $work->title }}</h1>
                <p>{{ $work->desc }}</p>
                <a href="">Detail</a>
              </div>
            </section>
          @endforeach

        </div>
      </div>
    </section>


    <section class="section" id="about">
      <div class="container">
        <h1 class="title">About</h1>
        <section class="contents">
          <div class="content profile">
            <div class="intro">
              <img src="{{ asset("./images/about/me.svg") }}" alt="" width="" height="" loading="lazy" decoding="async">
              <div class="sns-list">
                @foreach($snses as $sns)
                  <a href="{{ $sns->href }}">
                    <img src="{{ asset("./images/{$sns->file}") }}" alt="{{ $sns->label }}">
                  </a>
                @endforeach
              </div>
            </div>
            <div class="biography">
              <h3>Biography</h3>
              <h3>My name is Masapochi.</h3>
              <p>フロント・バックエンドエンジニア、UI/UXデザイナーをしています。</p>
              <p>ユーザーを第一に考え、ビジネス目標の達成につながるアクションに努めています。</p>
              <p>近年のウェブサイトは様々な要素が組み合わさっています。開発とデザインの経験、様々なツールやAPIを組み合わせることで、最適なユーザー体験を提供します。</p>
              <p>新しいテクノロジーに興味があり、キャッチアップのため日々スキルを磨いています。</p>
              <p>魅力的なデザイン・アニメーションにも意欲的に取り組んでいます。</p>


            </div>

            <div class="lists">
              <div>
                <h3>Career</h3>
                <ul>
                  <li>WEBアプリ開発</li>
                  <li>社内ツール開発</li>
                  <li>UI/UXデザイン</li>
                  <li>ランディングページ作成</li>
                  <li>コンテンツライティング</li>
                  <li>オウンドメディア運営</li>
                  <li>法人・官公庁営業</li>
                </ul>
              </div>
              <div>
                <h3>Interests</h3>
                <ul>
                  <li>最新テクノロジー</li>
                  <li>コーヒー</li>
                  <li>ガジェット</li>
                  <li>筋トレ</li>
                </ul>
              </div>
              <div>
                <h3>Education</h3>
                <ul>
                  <li>外国語大学卒業</li>
                </ul>
              </div>
            </div>

          </div>
        </section>
      </div>
    </section>

    <section class="section" id="skills">
      <div class="container">
        <h1 class="title">Skills</h1>
        <div class="contents">
          @foreach($skills as $skill)

            <section class="content text-center">
              <img src="{{ asset("./images/{$skill->file}") }}" alt="{{ $skill->label }}" width="" height="" loading="lazy" decoding="async">
              <h1 class="font-serif">{{ $skill->label }}</h1>
              <p>{!! $skill->detail !!}</p>
            </section>
          @endforeach

        </div>
      </div>
    </section>


    <section class="section" id="contact">
      <div class="container">
        <h1 class="title">Contact</h1>

        <div class="contents">
          <form class="contents" action="" method="post">
            <div class="field">
              <label class="label">Name
                <input class="input" type="text" placeholder="Text input">
              </label>
            </div>
            <div class="field">
              <label class="label">Email
                <input class="input is-danger" type="email" placeholder="Email input" value="">
                <p class="help is-danger">This email is invalid</p>
              </label>
            </div>
            <div class="field">
              <label class="label">Subject
                <input class="input" type="text" placeholder="Text input">
              </label>
            </div>
            <div class="field">
              <label class="label">Message
                <textarea class="textarea" placeholder="Textarea"></textarea>
              </label>
            </div>
            <div class="field">
              <button class="button is-link">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy;2020 Masapochi.me</p>
    </div>
  </footer>


</body>

</html>
