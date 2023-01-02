<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Ad;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    //
    public function index()
    {
        $ads= Ad::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get(); //sort in db
        return view('welcome',compact('ads'));
    }

    public function adsByCategory(Category $category){
        $ads= $category->ads()->where('is_accepted', true)->latest()->paginate(6);
        return view('ad.by-category',compact('category','ads'));
    }
    
}
