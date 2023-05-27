<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Dislike;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;

class DislikeController extends Controller
{
    public function dislike(Request $request, $id)
    {
        $answer = Answer::findOrFail($id);
        $user_id = $request->user_id;
        $dislikes = $answer->dislikes;

        foreach ($dislikes as $dislike) {
            if ($dislike->user_id == $user_id) {
                $dislike->delete();
                return back();
            }
        }
        $dislike = new Dislike();
        $dislike->answer_id = Answer::findOrFail($id)->id;
        $dislike->user_id = $request->user_id;
        $dislike->dislikes++;
        $dislike->save();
        return back();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dislike $dislike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dislike $dislike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dislike $dislike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dislike $dislike)
    {
        //
    }
}
