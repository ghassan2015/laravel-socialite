<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FirebaseController extends Controller
{
    public function index()
    {
        return view('index');
    }
public function userData($user){

    $users = User::where('mobile', '=', $user)->first();

    if (is_null($users)) {
        $users= User::create([
            'mobile'=>$user,
//            'provider'=>'firebase',
            'avatar'=>'https://style.anu.edu.au/_anu/4/images/placeholders/person_6x8.png'
        ]);
    }

    if(Auth::loginUsingId($users->id)){
        return redirect('home');
    }
    }
}
