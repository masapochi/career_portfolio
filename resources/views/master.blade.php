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
  <meta name="csrf-token" content="{{ csrf_token() }}">

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
      <a class="navbar-brand font-serif fw-bold" href="{{ config('app.url') }}">{{ config('app.name') }}</a>
      <span id="js-toggler" class="toggler p-2" type="button" aria-label="Toggle navigation">
        <div id="js-bar-top" class="toggler-bar" aria-hidden></div>
        <div id="js-bar-mid" class="toggler-bar" aria-hidden></div>
        <div id="js-bar-bot" class="toggler-bar" aria-hidden></div>
      </span>
      <div class="hidden-menu" id="js-navbar-content">
        <ul class="navbar-nav hidden-menu-list ms-auto bg-dark" id="js-navbar-list">
          @foreach($menus as $menu)
            <li class="nav-item">
              <a class="nav-link font-serif active px-3" href="#{{ $menu->href }}">{{ $menu->label }}</a>
            </li>
          @endforeach
          <li class="nav-item nav-item-sns d-flex d-lg-none">
            @foreach($snses as $sns)
              <a class="nav-link mx-2" href="{{ $sns->href }}" target="_blank" rel="noopener">
                <img class="img-fluid rounded-circle shadow-sm" src="{{ asset("./images/{$sns->file}") }}" alt="{{ $sns->label }}" width="48" height="48" loading="lazy" decoding="async">
              </a>
            @endforeach
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <main>

    <section class="section home" id="home">

      <div class="hero-bg">
        <video class="hero-bg-video" poster="{{ asset('./movies/hero_poster.png') }}" preload playsinline autoplay muted loop>
          <source src="{{ asset('./movies/hero.mp4') }}" type="video/mp4">
        </video>
      </div>

      <div class="hero">

        <h1 class="hero-heading" id="js-hero-heading">
          <div class="h3 hero-subtitle" id="js-hero-subtitle">I'm loving</div>
          <div class="h1 hero-title" id="js-hero-title">Beautiy in the Code</div>
        </h1>

        <a class="cta btn btn-lg btn-outline-light rounded-0 shadow" id="js-hero-cta" href="#works">Browse Works</a>

      </div>

    </section>

    {{-- <section class="section introduction" id="introduction">
      <div class="container">
        <p class="h5 lh-base text-center">I’m a Japan based Frontend & Backend developer, UI/UX designer<br>focused on crafting clean & user‑friendly experiences.</p>
      </div>
    </section> --}}

    <section class="section services" id="services">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Services</h1>
          <div class="content col-xl-8 px-xl-0">
            <div class="row g-5 justify-content-center">
              @foreach($services as $service)
                <section class="js-service col-md-6 col-lg-4 text-center">
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

    <section class="section works" id="works">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Works</h1>
          <div class="content col-xl-8 px-xl-0">
            <div class="row g-5">
              @foreach($works as $work)
                <section class="col-12 work">
                  <div class="row g-0 gx-md-5 gx-lg-5">
                    <figure class="col-md-5 col-lg-5 mb-md-0">
                      <img class="img-fluid shadow-sm" src="{{ asset("./images/{$work->image}") }}" alt="{{ $work->title }}" width="1206" height="630" loading="lazy" decoding="async">
                    </figure>
                    <div class="col-md-7 col-lg-7">
                      <h1 class="h5 mb-3 fw-bold font-serif">{{ $work->title }}</h1>
                      <p class="mb-4">{{ $work->desc }}</p>
                      <div class="mb-3 d-flex align-items-center">
                        @foreach($work->tags as $tag)
                          <small class="work-tag badge fw-normal border rounded-0 bg-white me-1 text-secondary">{{ $tag }}</small>
                        @endforeach
                      </div>
                      <div class="mt-auto">
                        @foreach($work->links as $link)
                          <a class="work-link btn btn-sm btn-secondary rounded-0 shadow-sm me-1" href="{{ $link->href }}" target="_blank" rel="noopener">
                            <span class="">{{ $link->label }}</span>
                          </a>
                        @endforeach
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


    <section class="section biography" id="biography">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Biography</h1>
          <section class="content col-xl-8 px-xl-0">
            <div class="row g-5">
              <div class="profile col-lg-5">
                <figure class="text-center">
                  <img class="avatar img-fluid rounded-circle shadow-sm bg-light border border-3 border-white" src="{{ asset("./images/about/me.svg") }}" alt="" width="" height="" loading="lazy" decoding="async">
                </figure>
                <h1 class="h2 text-center fw-bolder font-serif">Masapochi</h1>
                <p class="text-center mb-4">フロント・バックエンドエンジニア<br>UI/UXデザイナー</p>

                <div class="text-center">
                  @foreach($snses as $sns)
                    <a class="px-1 text-decoration-none" href="{{ $sns->href }}" target="_blank" rel="noopener">
                      <img class="img-fluid" src="{{ asset("./images/{$sns->file}") }}" alt="{{ $sns->label }}" width="48" height="48" loading="lazy" decoding="async">
                    </a>
                  @endforeach
                </div>
              </div>
              <div class="biography col-lg-7">
                <div class="mb-5">
                  <p>お客様・ユーザーの視点を大切にし、ビジネス目標の達成につながるアクションに努めています。</p>
                  <p>近年のウェブサイトは様々な要素が組み合わさっています。開発とデザインの経験、様々なツールやAPIを組み合わせて、最適なユーザー体験を提供します。</p>
                  <p>新しいテクノロジーに興味があり、キャッチアップのため日々スキルを磨いています。</p>
                  <p>魅力的なデザイン、アニメーションにも意欲的に取り組んでいます。</p>
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

    <section class="section skills" id="skills">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Skills</h1>
          <div class="content col-xl-8 px-xl-0">
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

    <section class="section contact" id="contact">
      <div class="container">
        <div class="row g-5">
          <h1 class="title col-xl-4">Contact</h1>

          <validation-observer ref="observer" tag="div" class="content col-xl-8 px-xl-0" v-slot="{ invalid, handleSubmit }">

            <div class="alert shadow-sm" :class="'alert-' + state" role="alert" v-if="state">
              @{{ notification }}
            </div>

            <form class="row gx-4 gy-3" @submit.prevent="handleSubmit(onSubmit)">

              <validation-provider tag="div" class="col-md-6" rules="required|max:100" v-slot="{ errors, classes }">
                <label :class="formLabelClass">Name</label>
                <input type="text" :class="[formInputClass, classes]" v-model="form.name">
                <div class="invalid-feedback">@{{ errors[0] }}</div>
              </validation-provider>

              <validation-provider tag="div" class="col-md-6" rules="required|email|max:100" v-slot="{ errors, classes }">
                <label :class="formLabelClass">Email</label>
                <input type="text" :class="[formInputClass, classes]" v-model="form.email">
                <div class="invalid-feedback">@{{ errors[0] }}</div>
              </validation-provider>

              <validation-provider tag="div" class="col-12" rules="required|max:255" v-slot="{ errors, classes }">
                <label :class="formLabelClass">Subject</label>
                <input type="text" class="form-control form-control-lg rounded-0" :class="[formInputClass, classes]" v-model="form.subject">
                <div class="invalid-feedback">@{{ errors[0] }}</div>
              </validation-provider>

              <validation-provider tag="div" class="col-12" rules="required|max:255" v-slot="{ errors, classes }">
                <label :class="formLabelClass">Message</label>
                <textarea rows="3" :class="[formInputClass, classes]" v-model="form.message"></textarea>
                <div class="invalid-feedback">@{{ errors[0] }}</div>
              </validation-provider>

              <div class="col-12 text-center mt-4">
                <button type="submit" class="contact-submit btn btn-lg btn-secondary rounded-0" :class="{ 'disabled': invalid }">Send</button>
              </div>

            </form>

          </validation-observer>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer bg-dark">
    <div class="container p-4">
      <p class="text-center text-light m-0">&copy;2020 Masapochi.me</p>
    </div>
  </footer>

  <div id="js-gotop" class="gotop position-fixed bottom-0 end-0 me-3 mb-3">
    <a class="btn btn-light rounded-0 border shadow" href="#top" aria-label="Go To Page Top">
      <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
      </svg>
    </a>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="//unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vee-validate@latest/dist/vee-validate.js"></script>
  <script src="//unpkg.com/vuejs-datepicker/dist/locale/translations/ja.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vee-validate@3.2.3/dist/rules.umd.min.js"></script>
  <script src="{{ asset('./js/app.js') }}"></script>
  <script src="{{ asset('./js/contact.js') }}"></script>
</body>

</html>
