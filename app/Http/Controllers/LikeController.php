<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{



    public function like(Request $request, $id)
    {
        $answer = Answer::findOrFail($id);
        $user_id = $request->user_id;
        $likes = $answer->likes;

        foreach ($likes as $like) {
            if ($like->user_id == $user_id) {
                $like->delete();
                return back();
            }
        }

        $newLike = new Like();
        $newLike->answer_id = $answer->id;
        $newLike->user_id = $user_id;
        $newLike->likes++;
        $newLike->save();

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
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        //
    }
}
