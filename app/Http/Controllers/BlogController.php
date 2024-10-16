<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $today = date('Y-m-d');

        $posts = [
            ['title' => 'Belajar Laravel Menyenangkan!', 'content' => 'Laravel membuat pengembangan web menjadi mudah...', 'date' => $today],
            ['title' => 'MVC dalam Laravel', 'content' => 'Model-View-Controller adalah...', 'date' => $today],
            ['title' => 'Tips dan Trik Laravel', 'content' => 'Ini adalah cara untuk menampilkan tanggal ', 'date' => $today]
        ];

        return view('index', compact('posts'));
    }
    public function show($index) {
        $today = date('Y-m-d');

        $posts = [
            ['title' => 'Belajar Laravel Menyenangkan!', 'content' => 'Laravel membuat pengembangan web menjadi mudah...', 'date' => $today],
            ['title' => 'MVC dalam Laravel', 'content' => 'Model-View-Controller adalah...', 'date' => $today],
            ['title' => 'Tips dan Trik Laravel', 'content' => 'Ini adalah cara untuk menampilkan tanggal ', 'date' => $today]
        ];

        if (isset($posts[$index])) {
            $post = $posts[$index];
            return view('post-detail', compact('post'));
        } else {
            return abort(404, 'Post not found');
        }
    }
}
