<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Dislike;
use App\Models\Like;
use Illuminate\Http\Request;

class DislikeController extends Controller
{
    public function dislike(Request $request, $id)
    {
        $user_id = auth()->id();

        Like::where('answer_id', $id)->where('user_id', $user_id)->delete();

        $existingDislike = Dislike::where('answer_id', $id)->where('user_id', $user_id)->first();

        if ($existingDislike) {
            $existingDislike->delete();
            return redirect()->back();
        }
        Dislike::create([
            'answer_id' => $id,
            'user_id' => $user_id,
        ]);

        return redirect()->back();
    }

}
