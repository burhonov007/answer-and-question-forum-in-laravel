<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Dislike;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request, $id)
    {
        $user_id = auth()->id();

        Dislike::where('answer_id', $id)->where('user_id', $user_id)->delete();
        $existingLike = Like::where('answer_id', $id)->where('user_id', $user_id)->first();

        if ($existingLike) {
            $existingLike->delete();
            return redirect()->back();
        }
        Like::create([
            'answer_id' => $id,
            'user_id' => $user_id,
        ]);

        return back();

    }
}
