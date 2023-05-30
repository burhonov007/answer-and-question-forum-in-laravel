<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
         $user = auth()->user();
         $answerCount = Answer::where('user_id',$user->id)->count();
         $commentCount = Comment::where('user_id',$user->id)->count();
         $answers = Answer::where('user_id',$user->id)->paginate(5);
         $comments = Comment::where('user_id',$user->id)->paginate(5);
         return view('profile', compact('user','answerCount','answers','comments','commentCount'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function becomeExpert(){
        return view('inc.become-expert-form');
    }


    public function storeToBecomeExpert(Request $request)
    {
        $request->validate($this->validationRules());
        $userData = $request->only('biography', 'work_experience','study_place','contact','theme','short_description');
        $userData['role'] = 'expert';
        $user = User::where('id',auth()->id())->first();
        $user->update($userData);
        return redirect()->back()->with('success', 'Шумо маълумотро бомуваффақият пур кардаед, то мутахассис шавед, 5 ҷавоби хуб нависед, пас аз он ки модератор ҷавоби шуморо тафтиш мекунад, шумо метавонед мутахассис шавед!!');
    }

    public function validationRules()
    {
        return [
            'biography' => 'required',
            'work_experience' => 'required',
            'study_place' => 'required',
            'contact' => 'required',
            'theme' => 'required',
            'short_description' => 'required',
        ];
    }


}
