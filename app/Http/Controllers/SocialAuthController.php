<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Socialite;

class SocialAuthController extends Controller
{
     public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $providerUser = \Socialite::driver('facebook')->user();
        return redirect()->route('home')->with('providerUser', $providerUser);
        //return view('store.index', compact('providerUser'));
    }
}
