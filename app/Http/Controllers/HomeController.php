<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        return view('home.index', [
            'title' => 'Khasanport',
        ]);
    }

    public function post(Post $post, Comment $comment) {
        $post_target = $post->latest()->where('id', request('post'))->get()[0];

        $post_target->views += 1;

        return view('home.post', [
            'title' => 'Khasanport',
            'post' => $post_target,
            'category' => $post->latest()->where('category_id', request('category'))->get(),
            'posts_user' => $post->latest()->where('user_id', request('user'))->get(),
            'search' => $post->latest()->filter(request(['search']))->get(),
            'comments' => $comment->latest()->where('post_id', request('post'))->get(),
        ]);
    }

    public function posts(Request $request) {
        
        return view('home.posts', [
            'title' => 'Khasanport',
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'users' => User::all(),
        ]);
    }

    public function category($id) {
        return view('home.category', [
            'title' => 'Khasanport',
            'category' => Post::latest()->where('category_id', $id)->get(),
        ]);
    }
    
    public function categories() {
        // dd(Category::all());
        return view('home.list-category', [
            'category' => Category::all(),
        ]);
    }
}
