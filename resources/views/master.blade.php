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

  <title>{{ config('app.name') }}</title>
  <meta name="description" content="{{ config('app.description') }}">
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"> --}}
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body id="top">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTVPCDX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ config('app.url') }}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @foreach($menus as $menu)
            <li class="nav-item">
              <a class="nav-link active" href="#{{ $menu->href }}">{{ $menu->label }}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>


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
        <p class="h5 lh-base text-center">I’m a Japan based Frontend & Backend developer, UI/UX designer<br>focused on crafting clean & user‑friendly experiences.</p>
      </div>
    </section>

    <section class="section" id="services">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Services</h1>
          <div class="col-xl-8 px-xl-0">
            <div class="row g-5 justify-content-center">
              @foreach($services as $service)
                <section class="col-md-6 col-lg-4 text-center">
                  <figure class="px-4 px-md-0">
                    <img class="img-fluid shadow-sm" src="{{ asset("./images/{$service->file}") }}" alt="{{ $service->label }} {{ $service->desc }}" width="" height="" loading="lazy" decoding="async">
                  </figure>
                  <h1 class="h5 fw-bold font-serif">{{ $service->label }}</h1>
                  <p class="fs-6 mb-0">{{ $service->desc }}</p>
                </section>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="works">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Works</h1>
          <div class="col-xl-8 px-xl-0">
            <div class="row g-5">
              @foreach($works as $work)
                <section class="col-12">
                  <div class="row g-0 gx-md-5">
                    <figure class="col-md-4 col-lg-5 mb-md-0">
                      <img class="img-fluid shadow-sm" src="{{ asset("./images/{$work->image}") }}" alt="{{ $work->title }}" width="1206" height="630" loading="lazy" decoding="async">
                    </figure>
                    <div class="col-md-8 col-lg-7">
                      <h1 class="h5 mb-3 fw-bold font-serif">{{ $work->title }}</h1>
                      <p class="mb-4">{{ $work->desc }}</p>
                      <div class="mt-auto">
                        @if($work->href)
                          <a class="btn btn-sm btn-light border rounded-0" href="{{ $work->href }}" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                              <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                            </svg><span class="align-middle ps-1">Browse</span>
                          </a>
                        @endif
                        @if($work->git)
                          <a class="btn btn-sm btn-light border rounded-0" href="{{ $work->git }}" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg><span class="align-middle ps-1">Github</span>
                          </a>
                        @endif
                      </div>
                    </div>
                  </div>
                </section>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="section" id="biography">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Biography</h1>
          <section class="col-xl-8 px-xl-0">
            <div class="row g-5">
              <div class="profile col-lg-5">
                <figure class="text-center">
                  <img class="avatar img-fluid rounded-circle shadow-sm bg-light" src="{{ asset("./images/about/me.svg") }}" alt="" width="" height="" loading="lazy" decoding="async">
                </figure>
                <h1 class="h2 text-center fw-bolder font-serif">Masapochi</h1>
                <p class="text-center mb-4">フロント・バックエンドエンジニア<br>UI/UXデザイナー</p>

                <div class="text-center">
                  @foreach($snses as $sns)
                    <a class="px-1 text-decoration-none" href="{{ $sns->href }}" target="_blank" rel="noopener">
                      <img class="img-fluid rounded-circle shadow-sm" src="{{ asset("./images/{$sns->file}") }}" alt="{{ $sns->label }}" width="48" height="48" loading="lazy" decoding="async">
                    </a>
                  @endforeach
                </div>
              </div>
              <div class="biography col-lg-7">
                <div class="mb-5">
                  <p>ユーザーを第一に考え、ビジネス目標の達成につながるアクションに努めています。</p>
                  <p>近年のウェブサイトは様々な要素が組み合わさっています。開発とデザインの経験、様々なツールやAPIを組み合わせることで、最適なユーザー体験を提供します。</p>
                  <p>新しいテクノロジーに興味があり、キャッチアップのため日々スキルを磨いています。</p>
                  <p>魅力的なデザイン・アニメーションにも意欲的に取り組んでいます。</p>
                </div>

                <div class="row gx-5 gy-3">
                  <div class="col-12">
                    <h2 class="h5 pb-2 mb-3 mb-md-4 mb-lg-3 fw-bold font-serif border-bottom">Career</h2>
                    <ul class="row g-0">
                      <li class="col-md-6">WEBアプリ開発</li>
                      <li class="col-md-6">社内ツール開発</li>
                      <li class="col-md-6">UI/UXデザイン</li>
                      <li class="col-md-6">ランディングページ作成</li>
                      <li class="col-md-6">コンテンツライティング</li>
                      <li class="col-md-6">オウンドメディア運営</li>
                      <li class="col-md-6">法人・官公庁営業</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h2 class="h5 pb-2 mb-3 mb-md-4 mb-lg-3 fw-bold font-serif border-bottom">Interests</h2>
                    <ul>
                      <li>ガジェット</li>
                      <li>コーヒー</li>
                      <li>筋トレ</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h2 class="h5 pb-2 mb-3 mb-md-4 mb-lg-3 fw-bold font-serif border-bottom">Education</h2>
                    <ul>
                      <li>外国語大学卒業</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>

    <section class="section" id="skills">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Skills</h1>
          <div class="col-xl-8 px-xl-0">
            <div class="row g-4 g-md-5">
              @foreach($skills as $skill)
                <section class="col-6 col-md-4 text-center">
                  <figure class="mb-0">
                    <img src="{{ asset("./images/{$skill->file}") }}" alt="{{ $skill->label }}" width="104" height="104" loading="lazy" decoding="async">
                  </figure>
                  <h1 class="h5 fw-bold font-serif">{{ $skill->label }}</h1>
                  <p class="fs-6 mb-0">{!! $skill->detail !!}</p>
                </section>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="section" id="contact">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Contact</h1>
          <form class="col-xl-8 px-xl-0">
            <div class="row gx-4 gy-3">
              <div class="col-md-6">
                <label for="inputName" class="form-label fw-bold font-serif">Name</label>
                <input type="text" class="form-control form-control-lg rounded-0" id="inputName">
              </div>
              <div class="col-md-6">
                <label for="inputEmail" class="form-label fw-bold font-serif">Email</label>
                <input type="email" class="form-control form-control-lg rounded-0" id="inputEmail">
              </div>
              <div class="col-12">
                <label for="inputSubject" class="form-label fw-bold font-serif">Subject</label>
                <input type="text" class="form-control form-control-lg rounded-0" id="inputSubject">
              </div>
              <div class="col-12">
                <label for="inputMessage" class="form-label fw-bold font-serif">Message</label>
                <textarea class="form-control form-control-lg rounded-0" id="inputMessage" rows="3"></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-light border-secondary rounded-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                  </svg>
                  <span class="align-middle ps-1">Send</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer bg-dark">
    <div class="container p-5">
      <p class="text-center text-light">&copy;2020 Masapochi.me</p>
    </div>
  </footer>

  <div class="position-fixed bottom-0 end-0 me-3 mb-3">
    <a class="btn btn-light rounded-0 border shadow" href="#top" aria-label="Go To Page Top">
      <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
      </svg>
    </a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>
