<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
      /**
     * Store a newly created resource in storage.
     */

    public function store(Question $question, Request $request)
    {
        $this->validate($request, $this->validationRules());
        $answer = new Answer();

        if ($request->filled('answer') && $request->filled('question_id')) {
        $answer->answer = $request->input('answer');
        $answer->user_id = Auth::id();
        $answer->question_id = $request->input('question_id');
        $answer->save();

            return back()->with('success', 'Ҷавоби нав бомуваффақият нашр карда шуд.');
        }
        return back()->with('alert', 'Майдонҳои зарурӣ мавҷуд нестанд.');
    }

    public function validationRules()
    {
        return [
            'answer' => 'required'
        ];
    }
}
