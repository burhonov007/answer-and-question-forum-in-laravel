<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Comment;
use App\Models\Question;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
            'user_id' => 'required',
            'answer_id' => 'required',
        ]);
        Comment::create($validatedData);
        return back()->with('success', 'Комментарияи шумо бомуваффақият илова карда шуд');
    }

    public function show(Answer $answer)
    {
        $comments = $answer->comments()->paginate(5);
        $question = $answer->question;
        return view('comment', compact('question', 'comments', 'answer'));
    }
}
