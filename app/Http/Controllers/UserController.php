<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $ads = Ad::where('user_id', Auth::user()->id)->get();
        return view('auth.dashboard',compact('ads'));
    }

}
