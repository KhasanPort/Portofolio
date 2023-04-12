<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('dashboard.post', [
            'title' => 'Khasanport',
            'post' => Post::where('id', $request->id)->get(),
            'title' => 'Khasanport',
            'Profile' => '',
            'Post' => 'active',
            'Comment' => '',
            'Users' => '',
            'Statistic' => '',
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post-create', [
            'title' => 'Khasanport',
            // 'post' => Post::where('id', $request->id)->get(),
            // 'title' => 'Khasanport',
            'Profile' => '',
            'Post' => 'active',
            'Comment' => '',
            'Users' => '',
            'Statistic' => '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $request->file('image')->store('post-images');
        // $valid = $request->validate([
        //     'title' => 'required|min:10|max:100',
        //     'descript' => 'required|min:25|max:500',
        //     'category_id' => ['required', 'max:1'],
        //     'image' => ['image', 'file'],
        //     'price' => ['required'],
        // ]);
        
        $request["user_id"] = auth()->user()->id;
        $request["created_at"] = date('Y-m-d H:i:s');
        $request['image'] = null;
        
        if($request->file('image')) {
            $request['image'] = $request->file('image')->store('post-images');
            dd('masuk');
        }
        
        // dd($request['title']);

        Post::create([
            'user_id' => $request['user_id'],
            'category_id' => $request['category_id'],
            'title' => $request['title'],
            'descript' => $request['descript'],
            'image' => $request['image'],
            'price' => $request['price'],
            'created_at' => $request['created_at'],
        ]);

        return redirect('/user/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.post-edit', [
            'post' => Post::where('id', $id)->get()[0],
            'title' => 'Khasanport',
            'Profile' => '',
            'Post' => 'active',
            'Comment' => '',
            'Users' => '',
            'Statistic' => '',

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // dd($request);
        // $valid = $request->validate([
        //     'title' => 'required|min:10|max:100',
        //     'descript' => 'required|min:25|max:500',
        //     'category' => ['required']
        // ]);
        // dd($valid); 
        
        Post::where('id', $request->id)->update([
            'category_id' => $request['category_id'],
            'title' => $request['title'],
            'descript' => $request['descript'],
            'image' => $request['image'],
            'price' => $request['price'],
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/user/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, Request $request)
    {
        $post->where('id', $request->id)->delete();

        return redirect('/user/posts');
    }
}
