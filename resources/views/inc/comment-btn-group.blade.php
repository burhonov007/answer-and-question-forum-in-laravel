<div class="btn-group" role="group" style="margin-bottom: 10px;">
    <form action="{{ route('comments-like', $comment->id) }}" method="POST" style="margin-right: 10px;">
        @csrf
        <button type="submit" class="btn btn-primary rounded"><i class="fas fa-thumbs-up"></i>
            {{ $comment->likeCount() }}
        </button>
        <input hidden type="text" value="{{Auth::user()->id}}"  class="form-control"  name="user_id">

    </form>
    <form action="{{ route('comments-dislike', $comment->id) }}" method="POST" style="margin-right: 10px;">
        @csrf
        <button type="submit" class="btn btn-danger rounded"><i class="fas fa-thumbs-down"></i>
            {{ $comment->dislikeCount() }}
        </button>
        <input hidden type="text" value="{{Auth::user()->id}}"  class="form-control"  name="user_id">
    </form>
</div>
