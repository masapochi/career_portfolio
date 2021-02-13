<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Mail;
use App\Mail\MessageNotification;

class HomeController extends Controller
{
    public function index()
    {
        $skills = json_decode(json_encode([
            [
                'label'  => 'WEB',
                'image'  => 'skills/html.svg',
                'detail' => 'HTML, CSS, Sass, Bootstrap',
            ],
            [
                'label'  => 'Javascript',
                'image'  => 'skills/js.svg',
                'detail' => 'Vue.js, jQuery, Node.js',
            ],
            [
                'label'  => 'php',
                'image'  => 'skills/php.svg',
                'detail' => 'Laravel, Wordpress',
            ],
            [
                'label'  => 'Python',
                'image'  => 'skills/python.svg',
                'detail' => 'Flask',
            ],
            [
                'label'  => 'Database',
                'image'  => 'skills/db.svg',
                'detail' => 'SQL Server, MySQL, SQLite',
            ],
            [
                'label'  => 'Design',
                'image'  => 'skills/xd.svg',
                'detail' => 'Adobe XD',
            ],
        ]));

        $menus = json_decode(json_encode([
            ['href' => 'home', 'label' => 'Home'],
            ['href' => 'services', 'label' => 'Services'],
            ['href' => 'works', 'label' => 'Works '],
            ['href' => 'biography', 'label' => 'Biography '],
            ['href' => 'skills', 'label' => 'Skills'],
            ['href' => 'contact', 'label' => 'Contact '],
        ]));

        $works = json_decode(json_encode([
            [
                'title'          => 'This Portfolio',
                'desc'           => 'このポートフォリオページです。',
                'image'          => 'ogp.webp',
                'fallback_image' => 'ogp.jpg',
                'tags'           => ['Laravel', 'Vue.js', 'VeeValidate', 'GSAP', 'Bootstrap'],
                'links'          => [
                    [
                        'label' => 'Github',
                        'href'  => 'https://github.com/masapochi/career_portfolio/'
                    ],
                ],
            ],
            [
                'title'          => 'Catalog Demo',
                'desc'           => '"Lorem Ipsum（ダミーテキスト）"を利用した仮想の商品カタログです。カテゴリ・キーワードで商品を検索できます。',
                'image'          => 'works/catalog.webp',
                'fallback_image' => 'works/catalog.jpg',
                'tags'           => ['Laravel', 'GSAP', 'SQLite', 'Bootstrap'],
                'links'          => [
                    [
                        'label' => 'Live',
                        'href'  => 'https://masapochi.me/catalog/'
                    ],
                    [
                        'label' => 'Github',
                        'href'  => 'https://github.com/masapochi/products-catalog/'
                    ],
                ],
            ],
            [
                'title'          => 'Thumbs Game',
                'desc'           => 'みんな知っているけれど、名前はだれも知らないあの親指ゲームです。PWA対応。アプリとしてインストール可能です。',
                'image'          => 'works/that_game.webp',
                'fallback_image' => 'works/that_game.png',
                'tags'           => ['Vue.js', 'PWA'],
                'links'          => [
                    [
                        'label' => 'Live',
                        'href'  => 'https://masapochi.me/that-game/'
                    ],
                    [
                        'label' => 'Github',
                        'href'  => 'https://github.com/masapochi/that-game/'
                    ],
                ],
            ],

        ]));

        $snses = json_decode(json_encode([
            [
                'label' => 'Twitter',
                'href'  => config('app.sns.twitter'),
                'image' => 'sns/twitter.svg',
            ],
            [
                'label' => 'Github',
                'href'  => config('app.sns.github'),
                'image' => 'sns/github.svg',
            ],
        ]));

        $services = json_decode(json_encode([
            [
                'label'          => 'Strategy',
                'desc'           => 'いつもあなたの側に',
                'href'           => '',
                'image'          => 'services/direction.webp',
                'fallback_image' => 'services/direction.jpg',
            ],
            [
                'label'          => 'SEO',
                'desc'           => 'より速く、より見つけやすく',
                'href'           => '',
                'image'          => 'services/performance.webp',
                'fallback_image' => 'services/performance.jpg',
            ],
            [
                'label'          => 'Usability',
                'desc'           => '使いやすいって素晴らしい',
                'href'           => '',
                'image'          => 'services/user_friendly.webp',
                'fallback_image' => 'services/user_friendly.jpg',
            ],
            [
                'label'          => 'Responsive',
                'desc'           => 'どんなデバイスでも美しく',
                'href'           => '',
                'image'          => 'services/multi_device.webp',
                'fallback_image' => 'services/multi_device.jpg',
            ],
            [
                'label'          => 'Animation',
                'desc'           => 'ページをダイナミックに',
                'href'           => '',
                'image'          => 'services/animation.webp',
                'fallback_image' => 'services/animation.jpg',
            ],
            [
                'label'          => 'Management',
                'desc'           => 'コンテンツ管理を簡単に',
                'href'           => '',
                'image'          => 'services/admin.webp',
                'fallback_image' => 'services/admin.jpg',
            ],
            [
                'label'          => 'Love',
                'desc'           => '愛を込めて',
                'href'           => '',
                'image'          => 'services/love.jpg',
                'fallback_image' => 'services/love.jpg',
            ],
        ]));

        return view('master', compact('menus', 'services', 'works', 'skills', 'snses'));
    }

    // public function message(Request $request)
    public function message(MessageRequest $request)
    {
        $validated = $request->validated();

        try {
            // throw new \Exception("Dummy Error", 1);

            Mail::to($request
                ->get('email'))
                ->send(new MessageNotification($request->all()));

            return response()->json([
                'state'        => 'success',
                'notification' => 'Your message has been successfully sent.',
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'state'        => 'danger',
                'notification' => 'Sorry, something is wrong... Please try again.',
            ], 500);
        }
    }
}
