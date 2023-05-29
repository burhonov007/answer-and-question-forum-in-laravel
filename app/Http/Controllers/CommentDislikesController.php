<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentDislikes;
use App\Models\CommentLikes;
use Illuminate\Http\Request;

class CommentDislikesController extends Controller
{
    public function dislike(Request $request, $id)
    {
        $user_id = auth()->id();

        $like = CommentLikes::where('comment_id', $id)->where('user_id', $user_id)->delete();

        $existingDislike = CommentDislikes::where('comment_id', $id)->where('user_id', $user_id)->first();
        if ($existingDislike) {
            $existingDislike->delete();
            return redirect()->back();
        }

        $dislike = CommentDislikes::create([
            'comment_id' => $id,
            'user_id' => $user_id,
        ]);
        return redirect()->back();
    }

}
