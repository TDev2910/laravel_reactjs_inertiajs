<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; // Import Inertia
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(3);
        return Inertia::render('Users/Show',compact('users'));
    }  

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
       return to_route('users.index')->with('msg','User created successfully!');
    } 

    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return to_route('users.index')->with('msg','User created successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index')->with('msg','User deleted successfully!');
    }
}
 