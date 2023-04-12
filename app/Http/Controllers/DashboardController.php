<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index', [
            'title' => 'Khasanport',
            'Profile' => 'active',
            'Post' => '',
            'Comment' => '',
            'Users' => '',
            'Statistic' => '',
            'user' => User::where('id', auth()->user()->id)->get()[0],
        ]);
    }
    
    public function posts() {
        return view('dashboard.posts', [
            'Profile' => '',
            'Post' => 'active',
            'Comment' => '',
            'Users' => '',
            'Statistic' => '',
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->filter(request(['search']))->get(),
        ]);
    }

    public function comments() {
        return view('dashboard.comment', [
            'Profile' => '',
            'Post' => '',
            'Comment' => 'active',
            'Users' => '',
            'Statistic' => '',
        ]);
    }

    public function users() {
        return view('admin.users', [
            'users' => User::latest()->filter(request(['search']))->get(),
            'Profile' => '',
            'Post' => '',
            'Comment' => '',
            'Users' => 'active',
            'Statistic' => '',
        ]);
    }

    public function profile($id)
    {
        return view('admin.userProfile', [
            'profile' => User::where('id', $id)->get(),
            'Profile' => '',
            'Post' => '',
            'Comment' => '',
            'Users' => 'active',
            'Statistic' => '',
        ]);
    }

    public function statistic() {
        return view('admin.statistic', [
            'Profile' => '',
            'Post' => '',
            'Comment' => '',
            'Users' => '',
            'Statistic' => 'active',
        ]);
    }
}

