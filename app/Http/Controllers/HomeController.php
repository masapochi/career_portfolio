<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Mail;
use App\Mail\MessageNotification;

class HomeController extends Controller
{
    function index()
    {
        $skills = json_decode(json_encode([
            [
                'label'  => 'WEB',
                'file'   => 'skills/html.svg',
                'detail' => 'HTML, CSS, Sass, Bootstrap',
            ],
            [
                'label'  => 'Javascript',
                'file'   => 'skills/js.svg',
                'detail' => 'Vue.js, jQuery, Node.js',
            ],
            [
                'label'  => 'php',
                'file'   => 'skills/php.svg',
                'detail' => 'Laravel, Wordpress',
            ],
            [
                'label'  => 'Python',
                'file'   => 'skills/python.svg',
                'detail' => 'Flask',
            ],
            [
                'label'  => 'Database',
                'file'   => 'skills/db.svg',
                'detail' => 'SQL Server, MySQL, SQLite',
            ],
            [
                'label'  => 'Design',
                'file'   => 'skills/xd.svg',
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
                'title' => 'Catalog Demo',
                'desc'  => '"Lorem Ipsum（ダミーテキスト）"を利用した仮想の商品カタログです。カテゴリ・キーワードで商品を検索できます。',
                'image' => 'works/ogp.jpg',
                'tags'  => ['Laravel', 'GSAP', 'SQLite'],
                'links' => [
                    [
                        'label' => 'Live',
                        'href' => 'https://masapochi.me/catalog/'
                    ],
                    [
                        'label' => 'Github',
                        'href' => 'https://github.com/masapochi/products-catalog/'
                    ],
                ],
            ],
            [
                'title' => 'Thumbs Game',
                'desc'  => 'みんな知っているけれど、名前はだれも知らないあの親指ゲームです。PWA対応。アプリとしてインストール可能です。',
                'image' => 'works/ogp.jpg',
                'tags'  => ['Laravel', 'Vue.js', 'PWA'],
                'links' => [
                    [
                        'label' => 'Live',
                        'href' => 'https://masapochi.me/that-game/'
                    ],
                    [
                        'label' => 'Github',
                        'href' => 'https://github.com/masapochi/that-game/'
                    ],
                ],
            ],
            [
                'title' => 'This Portfolio',
                'desc'  => 'このポートフォリオページです。',
                'image' => 'works/ogp.jpg',
                'tags'  => ['Laravel', 'GSAP', 'Bootstrap'],
                'links' => [
                    [
                        'label' => 'Github',
                        'href' => 'https://github.com/masapochi/career_portfolio/'
                    ],
                ],
            ],
        ]));

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

        $snses = json_decode(json_encode([
            [
                'label' => 'Twitter',
                'href'  => 'https://twitter.com/__masapochi__',
                'file' => 'sns/twitter.svg',
            ],
            [
                'label' => 'Github',
                'href'  => 'https://github.com/masapochi',
                'file' => 'sns/github.svg',
            ],
        ]));

        $services = json_decode(json_encode([
            [
                'label' => 'Strategy',
                'desc'  => 'いつもあなたの側に',
                'href'  => '',
                'file'  => 'services/direction.jpg',
            ],
            [
                'label' => 'SEO',
                'desc'  => 'より速く、より見つけやすく',
                'href'  => '',
                'file'  => 'services/performance.jpg',
            ],
            [
                'label' => 'Usability',
                'desc'  => '使いやすいって素晴らしい',
                'href'  => '',
                'file'  => 'services/user_friendly.jpg',
            ],
            [
                'label' => 'Responsive',
                'desc'  => 'どんなデバイスでも美しく',
                'href'  => '',
                'file'  => 'services/multi_device.jpg',
            ],
            [
                'label' => 'Animation',
                'desc'  => 'ページをダイナミックに',
                'href'  => '',
                'file'  => 'services/animation.jpg',
            ],
            [
                'label' => 'Management',
                'desc'  => 'コンテンツ管理を簡単に',
                'href'  => '',
                'file'  => 'services/admin.jpg',
            ],
            [
                'label' => 'Love',
                'desc'  => '愛を込めて',
                'href'  => '',
                'file'  => 'services/love.jpg',
            ],
        ]));

        return view('master', compact('menus', 'services', 'works', 'skills', 'careers', 'snses'));
    }

    public function message(MessageRequest $request)
    // public function message(Request $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        try {
            $message = 'Your message has been successfully sent.';
            $isSuccess = true;

            throw new \Exception("Error Processing Request", 1);
            // echo 'aaaaaaaaaa';
            $res =  Mail::to($request
                ->get('email'))
                ->send(new MessageNotification($request->all()));
        } catch (\Exception $e) {
            // dd($e->getMessage());
            // echo $e->getMessage();
            $message = 'Sorry, something is wrong... Please try again.';
            $isSuccess = false;
        } finally {
            // dd($message, $isSuccess);
            // $request->session()->flash('isSuccess', $isSuccess);
            // $request->session()->flash('msg', $message);
            return redirect()
                ->route('home', ['#contact'])
                ->with(['msg' => $message, 'isSuccess' => $isSuccess]);
        }
    }
}