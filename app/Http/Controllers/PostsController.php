<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = posts::all();//accessing database using model posts.php, by doing this it will access all from posts
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(posts $post) {
        return view('posts.single', [
            'post' => $post
        ]);
    }
}
