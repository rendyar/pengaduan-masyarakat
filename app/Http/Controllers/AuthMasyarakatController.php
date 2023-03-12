<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMasyarakatController extends Controller
{
 
    public function index()
    {

      return view('login-masyarakat');

    }

      public function proses(Request $request)
      {
        $credentials = $request->validate([
          'email' => 'required',
          'password' => 'required',
        ]);

        if (Auth::guard('masyarakat')->attempt($credentials)) {
          $request->session()->regenerate();
          return redirect()->intended('dashboard-masyarakat');
        }
        
        return redirect('/login-masyarakat')->with('error', 'Email atau Password salah!');

      }

      public function logout(Request $request)
      {
          Auth::logout();

          $request->session()->invalidate();

          $request->session()->regenerateToken();

          return redirect('/login-masyarakat');
      }
}
