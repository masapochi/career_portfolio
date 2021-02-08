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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTVPCDX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header section">
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item" href="#home">Home</a>
                        <a class="navbar-item" href="#services">Services</a>
                        <a class="navbar-item" href="#works">Works</a>
                        <a class="navbar-item" href="#about">About</a>
                        <a class="navbar-item" href="#skills">Skills</a>
                        <a class="navbar-item" href="#contact">Contact</a>
                    </div>
                </div>
        </nav>
    </header>

    <main>

        <section class="section" id="home">
            <h1 class="title">Home</h1>
            <h2 class="subtitle">A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.</h2>

            <video class="hero-bg__video" poster="{{ asset('./movies/hero_poster.png') }}" preload playsinline autoplay muted loop>
                <source src="{{ asset('./movies/hero.mp4') }}" type="video/mp4">
            </video>
        </section>

        <div class="section is-medium">
            <div class="container">
                <p class="has-text-centered">
                    I’m a Japan based Frontend & Backend developer, UI/UX designer<br>
                    focused on crafting clean & user‑friendly experiences.
                </p>
            </div>
        </div>

        <section class="section" id="services">
            <div class="container">
                <h1 class="title has-text-centered">Services</h1>
                <h2 class="has-text-centered">subtitle</h2>

                <div class="columns column">
                    <div class="card is-shadowless">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="card-image"></div>
                            <h1 class="title">card-title</h1>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <a href="">More</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="section" id="works">
            <div class="container">
                <h1 class="title has-text-centered">Works</h1>
                <h2 class="has-text-centered">subtitle</h2>
                @foreach($works as $work)
                    <div class="work">
                        <img class="work__image" loading="lazy" decoding="async" src="{{ $work['image'] }}" alt="{{ $work['title'] }}" width="1206" height="630">
                        <div class="work__body">
                            <h3 class="work__title">{{ $work['title'] }}</h3>
                            <p class="work__desc">{{ $work['desc'] }}</p>
                            <a class="work__btn" href="{{ $work['url'] }}" <?php if ($work['rel']) : ?> target="_blank" rel="noopener" <?php endif; ?>>Detail
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="section" id="about">
            <div class="container">
                <h1 class="title has-text-centered">About</h1>
                <h2 class="has-text-centered">subtitle</h2>

                <div class="columns">
                    <div class="colum">
                        <img src="{{ asset('images/about/me.svg') }}" alt="My name is Masapochi.">
                    </div>
                    <div class="column"></div>
                </div>
            </div>
        </section>

        <section class="section" id="skills">
            <div class="container">
                <h1 class="title has-text-centered">Skills</h1>
                <h2 class="has-text-centered">subtitle</h2>

                <div class="columns">

                    @foreach($skills as $skill)
                        <div class="column">
                            <img src="{{ asset("./images/skills/{$skill->file}.svg") }}" alt="{{ $skill->label }}">
                            <h1 class="title">{{ $skill->label }}</h1>
                            <p>{{ $skill->detail }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section" id="contact">
            <div class="container">
                <h1 class="title has-text-centered">Contact</h1>
                <h2 class="has-text-centered">subtitle</h2>

                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input is-danger" type="email" placeholder="Email input" value="">
                    </div>
                    <p class="help is-danger">This email is invalid</p>
                </div>

                <div class="field">
                    <label class="label">Subject</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Textarea"></textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>

</body>

</html>
