<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        //
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $users = $this->user->where('email',$user->email)->first();
        if (!is_null($users) && !empty($users)) {
        }else {
            $this->user->create([
                'name' => $user->name,
                'email' => $user->email,
                'facebook_token' => $user->token,
            ]);

        }
        Auth::login($user);
        return redirect()->intended('/home');
    }

    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterCallback()
    {
        $user = Socialite::driver('twitter')->user();
        $users = $this->user->where('email', $user->email)->first();
        if (!is_null($users) && !empty($users)) {
        } else {
            $this->user->create([
                'name' => $user->name,
                'email' => $user->email,
                'twitter_token' => $user->token,
            ]);
        }
        Auth::login($user);
        return redirect()->intended('/home');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $users = $this->user->where('email', $user->email)->first();
        if (!is_null($users) && !empty($users)) {
        } else {
            $this->user->create([
                'name' => $user->name,
                'email' => $user->email,
                'google_token' => $user->token,
            ]);
        }
        Auth::login($user);
        return redirect()->intended('/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
