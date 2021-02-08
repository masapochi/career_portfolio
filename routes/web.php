<?php

Route::get('/', function () {
    $skills = json_decode(json_encode([
        [
            'label'  => 'WEB',
            'file'   => 'html',
            'detail' => 'HTML5, CSS3, Sass, Bootstrap, Bulma',
        ],
        [
            'label'  => 'Javascript',
            'file'   => 'js',
            'detail' => 'Vue.js, jQuery',
        ],
        [
            'label'  => 'PHP',
            'file'   => 'php',
            'detail' => 'Laravel, Wordpress',
        ],
        [
            'label'  => 'Python',
            'file'   => 'python',
            'detail' => 'Flask',
        ],
        [
            'label'  => 'Databases',
            'file'   => 'db',
            'detail' => 'Adobe XD',
        ],
        [
            'label'  => 'Design',
            'file'   => 'xd',
            'detail' => 'SQL Server, MySQL, SQLite',
        ],
    ]));

    $menus = [
        ['link' => 'home', 'label' => 'Home'],
        ['link' => 'works', 'label' => 'Works '],
        ['link' => 'services', 'label' => 'Services'],
        ['link' => 'skills', 'label' => 'Skills'],
        ['link' => 'about', 'label' => 'About '],
        ['link' => 'contact', 'label' => 'Contact '],
    ];

    $works = [
        [
            'title' => 'Catalog Demo',
            'desc'  => 'Catalog Demo" using Lorem Ipsum.',
            'image' => './assets/images/works/ogp.jpg',
            'url'   => 'https://masapochi.me/catalog/',
            'rel'   => false,
        ],
        [
            'title' => 'Thumbs Game',
            'desc'  => 'Everyone knows it, but no one knows it\'s name...',
            'image' => './assets/images/works/ogp.jpg',
            'url'   => 'https://masapochi.me/that-game/',
            'rel'   => false,
        ],
    ];

    $careers = [
        [
            'title' => 'Lorem, ipsum dolor.',
            'desc'  => 'A web developer.'
        ],
        [
            'title' => 'Lorem, ipsum dolor.',
            'desc'  => 'A sales for home improvement stores, government offices, shcools, welfare facilities.'
        ],
        [
            'title' => 'Lorem, ipsum dolor.',
            'desc'  => 'A College Student at foreign language university.(In Japan, Overseas)'
        ],
        [
            'title' => 'Lorem, ipsum dolor.',
            'desc'  => 'A College Student at foreign language university.(In Japan, Overseas)'
        ],
        [
            'title' => 'Lorem, ipsum dolor.',
            'desc'  => 'A College Student at foreign language university.(In Japan, Overseas)'
        ],
    ];

    $snses = [
        [
            'name'     => 'Twitter',
            'url'      => 'https://twitter.com/__masapochi__',
            'iconPath' => './assets/images/sns/twitter.svg',
        ],
        [
            'name'     => 'Github',
            'url'      => 'https://github.com/masapochi',
            'iconPath' => './assets/images/sns/github.svg',
        ],
    ];
    return view('master', compact('skills', 'menus', 'works', 'careers', 'snses'));
});
