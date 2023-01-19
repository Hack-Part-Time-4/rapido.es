<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    
     public function __construct()
     {
        $this->middleware('auth');
     }

    public function create()
    {
        // return dd('new Ad');
        return view('ad.create');
    }

     public function show(Ad $ad)
    {
        return view("ad.show", compact('ad'));
    }

    // borrar anuncios
    public function destroy($id)
    {
        $user = Ad::find($id);

        $user->delete();
        return back();
    }
}
