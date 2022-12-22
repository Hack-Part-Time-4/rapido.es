<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function__construct()
    {
        $this->middleware('isRevisor');
    }

    public function index()
    {
        dd("Solo para revisores");
    }

    public function index()
    {
        $ad = Ad::where('is_accepted',null)
                        ->orderBy('created_at','desc')
                        ->first();
        return view('revisor.home',compact('ad'));
    }

    public function acceptAd(Ad $ad)
    {
        $ad->setAccepted(true);
        return redirect()->back()->withMessage(['type'=>'success','text'=>'Anuncio aceptado']);
    }
    public function rejectAd(Ad $ad)
    {
        $ad->setAccepted(false);
        return redirect()->back()->withMessage(['type'=>'danger','text'=>'Anuncio rechazado']);
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('rapido:makeUserRevisor',['email'=>$user->email]);
        return redirect()->route('home')->withMessage(['type'=>'successs','text'=>'Ya tenemos un compañero más']);
    }

    
}
