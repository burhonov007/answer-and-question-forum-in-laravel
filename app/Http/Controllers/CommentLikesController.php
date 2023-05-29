<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Comment;
use App\Models\CommentDislikes;
use App\Models\CommentLikes;
use App\Models\Dislike;
use App\Models\Like;
use Illuminate\Http\Request;

class CommentLikesController extends Controller
{
    public function like(Request $request, $id)
    {
        $user_id = auth()->id();

        CommentDislikes::where('comment_id', $id)->where('user_id', $user_id)->delete();

        $existingLike = CommentLikes::where('comment_id', $id)->where('user_id', $user_id)->first();
        if ($existingLike) {
            $existingLike->delete();
            return redirect()->back();
        }

        $like = CommentLikes::create([
            'comment_id' => $id,
            'user_id' => $user_id,
        ]);
        return redirect()->back();
    }

}
