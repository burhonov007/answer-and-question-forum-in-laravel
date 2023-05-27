<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
         $user = auth()->user();
         $answerCount = Answer::where('user_id',$user->id)->count();
         $answers = Answer::where('user_id',$user->id)->paginate(5);
         return view('profile', compact('user','answerCount','answers'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


}
