@extends('layouts.super')
@section('content')
    <div>
        <a href="{{ route('show-question', $answer->question->id) }}" class="btn btn-outline-primary"></i>Ба кафо</a>
    </div>
    <div class="card mx-auto mt-4">
        <div class="card__body">
            @include('inc.commented-answer-creator')
        </div>
    </div>

    {{-- ДОДАНИ  КОММЕНТАРИЙ  --}}
    @include('inc.messages.sessionMessages')
    @include('inc.comment-form')
    {{--  КОММЕНТАРИЯХО  --}}
    <div class="mx-auto mt-4 text-start text-uppercase"><h5><b>КОММЕНТАРИЯХО</b></h5></div>

    @include('inc.messages.infoMessages')
    @if(isset($comments))
        @foreach($comments as $comment)
            <div class="card mx-auto mt-4">
                <div class="card__body">
                    @include('inc.comment-creator')
                    @include('inc.comment-btn-group')
                </div>
            </div>

        @endforeach
    @else
        <div class="mx-auto mt-4 text-start text-info text-uppercase"><h6><b>Холо ягон нафар комментария
                    нанавиштааст!!!</b></h6></div>
    @endif
    @if(!Auth::guest())
        <div class="mt-3">
            {{ $comments->links() }}
        </div>
    @endif

@endsection
