<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $posts = [
            [
                'title' => 'TailwindCSSの解説記事',
                'content' => "A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup. \n
                    I’ve written a few thousand words on why traditional “semantic class names” are the reason CSS is hard to maintain, but the truth is you’re never going to believe me until you actually try it. If you can suppress the urge to retch long enough to give it a chance, I really think you’ll wonder how you ever worked with CSS any other way.",
                'author' => [
                    'name' => '田中太郎',
                ],
                'created_at' => '2023-08-01',
            ],
            [
                'title' => 'TailwindCSSの解説記事2',
                'content' => "A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup. \n
                    I’ve written a few thousand words on why traditional “semantic class names” are the reason CSS is hard to maintain, but the truth is you’re never going to believe me until you actually try it. If you can suppress the urge to retch long enough to give it a chance, I really think you’ll wonder how you ever worked with CSS any other way.",
                'author' => [
                    'name' => '田中太郎',
                ],
                'created_at' => '2023-08-02',
            ],
        ];

        return view('post.index',
            [
                'posts' => $posts,
            ]
        );
    }
}
