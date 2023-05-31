<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        
        $validateField = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(User::where('email',$validateField['email'])->exists()){
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Произошла ошибка пользователь существует'
            ]);
        }

        $user = User::create($validateField);

        if ($user) {
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.private'))->withErrors([
            'formError' => 'Произошла ошибка'
        ]);
    }
}