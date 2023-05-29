<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Question $question, Request $request)
    {
        $this->validate($request, $this->validationRules());
        $answerData = $request->only('answer', 'question_id');
        $answerData['user_id'] = Auth::user()->id;
        $answer = Answer::create($answerData);
        if ($answer) {
            return back()->with('success', 'Ҷавоби нав бомуваффақият нашр карда шуд.');
        }
        return back()->with('alert', 'Майдонҳои зарурӣ мавҷуд нестанд.');
    }

    public function validationRules()
    {
        return [
            'answer' => 'required',
            'question_id' => 'required|exists:questions,id'
        ];
    }
}

