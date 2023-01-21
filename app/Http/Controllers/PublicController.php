<?php

namespace App\Http\Controllers;


use App\Models\Ad;
use App\Models\Category;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;



class PublicController extends Controller
{
    //
    public function index()
    {
        $ads= Ad::where('is_accepted', true)->latest()->take(6)->get(); //sort in db
        return view('welcome',compact('ads'));
    }

    public function adsByCategory(Category $category)
    {
        $ads= $category->ads()->where('is_accepted', true)->latest()->paginate(6);
        return view('ad.by-category',compact('category','ads'));
    }

    public function setLocale($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }

    
        public function search (Request $request)
        {
            $q = $request->input('q');
            $ads = Ad::search($q)
                ->where('is_accepted', true)
                ->paginate();
            return view('ad.result_search', compact('q', 'ads'));    
    }

    public function aboutUs()
    {
        return view('auth.about-us');
    }
}