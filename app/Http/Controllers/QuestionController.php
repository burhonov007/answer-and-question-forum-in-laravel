<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Dislike;
use App\Models\Like;
use App\Models\Question;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::orderBy('id', 'desc')->paginate(3);
        return view('home', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->validationRules());
        $question = new Question;
        $question->title = $request->title;
        $question->user_id = Auth::user()->id;
        $question->question = $request->question;
        $question->save();
        return redirect()->route('home')->with('success', 'Саволи шумо бомуваффақият нашр карда шуд.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $likes = Like::all();
        $dislikes = Dislike::all();
        return view('answer', compact('question','likes', 'dislikes'));
    }



//    public function user(User $user)
//    {
//        $title = "Questions by " . $user->name;
//        $questions = Question::orderBy('id', 'desc')->where('user_id', $user->id)->paginate(5);
//        return view('questions', compact('questions', 'title'));
//    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function comment(Question $question, Request $request)
//    {
//        $question_comment = new QuestionComment();
//        $question_comment->comment = $request->question_comment;
//        if ($request->question_comment) {
//            $question_comment->user_id = Auth::user()->id;
//            $question->comments()->save($question_comment);
//            return '<hr><div>' . $request->question_comment . ' <a href="user/' . $question_comment->user->id . '">' . $question_comment->user->name . '</a></div>';
//        }
//    }
    /**
     * Update the specified resource in storage.
     */


    public function validationRules()
    {
        return [
            'title' => 'required|max:255',
            'question' => 'required',
        ];
    }
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
