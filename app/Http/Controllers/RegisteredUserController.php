<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255' ],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:8','max:255'],
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => $request->password // no need to Hash or bcrypt because we have User.php Model; line 30
        ]);
        
        Auth::login($user);

        return redirect('/')->with('success', 'Registration Complete!');
    }
}
