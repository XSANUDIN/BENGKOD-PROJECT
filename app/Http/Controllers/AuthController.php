<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //
    public function showLogin(){

        return view('auth.login');

    }

    public function showRegister(){

        return view('auth.register');

    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
        
            $user = Auth::user();
        
            $routes = [
                'pasien' => 'pasien.dashboard',
                'dokter' => 'dokter.dashboard',
            ];
        
            $redirectRoute = $routes[$user->role] ?? '/';

            Alert::toast('Selamat Datang '. Auth::user()->nama)
                ->autoClose(1500)
                ->timerProgressBar();

            return redirect()->intended(route($redirectRoute));
        }

        throw ValidationException::withMessages([
            'user' => 'Maaf User Tidak Ditemukan'
        ]);



    }

    public function register(Request $request){

        $validated = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:users',
            'no_hp' => 'required|string',
            'password' => 'required|string|confirmed',
        ]);

         User::create($validated);


        return redirect()->route('login');
    }

    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('auth.login');
    }
    

}
