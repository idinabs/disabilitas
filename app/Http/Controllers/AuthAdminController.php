<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Log;


class AuthAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Ganti dengan view yang sesuai
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        Log::info('Login attempt:', ['email' => $request->email]);
    
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.home');
        }
    
        Log::warning('Failed login attempt:', ['email' => $request->email]);
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak sesuai dengan catatan kami.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login'); // Ganti dengan route yang sesuai
    }
}
