<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => '',
            'email' => 'unique:users',
            'password' => 'min:8'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $roleUser = Role::where('name', 'user')->first();
        $user->addRole($roleUser);

        return redirect('/login')->with('success', 'User Registration Successful! Please Login.');
    }
}
