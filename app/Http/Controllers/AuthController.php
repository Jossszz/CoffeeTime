<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin(){
        return View('auth.login');
    }

    public function attemptLogin(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($credentials, $request?->remember)){
            $user = Auth::user();
            return redirect()->route('home')->with('user', $user);
        }else{
            return redirect()->back()->withErrors(['error' => 'Correo o Contraseña incorrectas']);
        }
    }

    public function showRegister(){
        return View('auth.register');
    }

    public function landing(){
        return View('auth.landing');
    }

    function menuUser(){
        if(Auth::check()){
            $user = Auth::user();
            Session::put('name', $user->name);
            $categories = Categories::with('products')->get();
            return view('admin.menuUser', ['categories' => $categories], ['name' => $user->name]);
        }
    }

    public function menu(){
        $categories = Categories::with('products')->get();
        return view('auth.menu', ['categories' => $categories]);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function storeAccount(Request $request){
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
