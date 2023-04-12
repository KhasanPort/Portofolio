<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('user.register', [
            'title' => 'Khasanport',
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'username' => 'required|max:255',
            'email' => ['required', 'min:3', 'max:255', 'unique:users', 'email'],
            'password' => 'required|min:5|max:255',
        ]);
        
        $valid["password"] = bcrypt($request->password);
        // $validateData['password'] = Hash::make($validateData['password']);
        
        User::create($valid);

        // User::create($validateData);

        return redirect('/dashboard');    

    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        return view('admin.adduser', [
            'title' => 'Khasanport'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::where('id', $id)->get();

        // dd($users);
        return view('admin.edit', [
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $valid = $request->validate([
            'name' => 'max:255',
            'username' => 'required|max:255',
            'email' => ['required', 'min:3', 'max:255', 'unique:users', 'email'],
            'phone' => 'integer',
            'gender' => 'boolean',
            'address' => 'max:500',
        ]);

        if ($request->file('image')) {
            $valid["image"] = $request->file('image')->store('user_image');
        }

        User::where('id', $request->id)->update($valid);
        
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect('/admin/users');
    }
}
