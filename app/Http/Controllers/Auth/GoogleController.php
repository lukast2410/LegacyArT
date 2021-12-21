<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        try {
            $user = Socialite::driver('google')->user();
            
            $findUser = User::where('email', $user->getEmail())->first();
            

            if($findUser){
                Auth::login($findUser);
                return redirect()->intended('home');
            }else{
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => bcrypt('lalalalala'),
                    'profile_image' => $user->getAvatar(),
                    'email_verified_at' => now(),
                    'role_id' => 1,
                ]);
                
                Auth::login($newUser);
                return redirect()->intended('home');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
