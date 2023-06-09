<div class="btn-group" role="group" style="margin-bottom: 10px;">
    <form action="{{ route('answers-like', $answer->id) }}" method="POST" style="margin-right: 10px;">
        @csrf
        <button type="submit" id="like-button" class="btn {{ $answer->likeByUser(\Auth::id()) ?  'btn-success' : 'btn-outline-success' }} rounded"><i class="fas fa-thumbs-up"></i>
            {{ $answer->likes->count() }}
        </button>
    </form>
    <form action="{{ route('answers-dislike', $answer->id) }}" method="POST" style="margin-right: 10px;">
        @csrf
        <button type="submit" class="btn {{ $answer->dislikeByUser(\Auth::id()) ?  'btn-danger' : 'btn-outline-danger' }}
         rounded"><i class="fas fa-thumbs-down"></i>
            {{ $answer->dislikeCount() }}
        </button>
    </form>
    <form action="{{ route('show-comments' , $answer->id) }}" method="GET" style="margin-right: 10px;">
        @csrf

        <button type="submit" class="btn {{ $answer->commentByUser(\Auth::id()) ?  'btn-dark' : 'btn-outline-dark' }}  rounded" ><i class="fas fa-comments"></i>
            {{ $answer->commentCount() }}
        </button>
        <a href="{{ route('show-question', $answer->question_id) }}" type="submit" class="btn btn-outline-primary rounded">
            Дидани савол
        </a>
    </form>
</div>




