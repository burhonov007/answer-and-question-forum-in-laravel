<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('id', 'desc')->paginate(3);
        return view('home', compact('questions'));
    }

    public function create()
    {
        return view('inc.add-form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->validationRules());
        $question = Question::create([
            'title' => $validatedData['title'],
            'user_id' => auth()->id(),
            'question' => $validatedData['question'],
        ]);
        return redirect()->back()->with('success', 'Саволи шумо бомуваффақият нашр карда шуд.');
    }


    public function show(Question $question)
    {
        $answers = Answer::where('question_id', $question->id)->paginate(5);
        return view('answer', compact('question','answers'));
    }

    public function validationRules()
    {
        return [
            'title' => 'required|max:255',
            'question' => 'required',
        ];
    }
}
