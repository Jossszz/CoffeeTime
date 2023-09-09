<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $authenticated_user = Auth::user();
        return View('admin.home')->with(['user' => $authenticated_user]);
    }
}
