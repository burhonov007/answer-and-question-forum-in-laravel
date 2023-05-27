@extends('layouts.super')
@section('content')
@foreach($questions as $question)
    <div class="card mx-auto mt-4">
        <div class="card__body">
            <img src="{{ asset('./assets/avatar.svg') }}" style="margin-right: 15px;" class="rounded-circle-avatar "  alt="Аватар"><b style="margin-right: 50px;">{{ $question->user->name }}</b>
            @if($question->user->theme === 'expert')
                <i class="fas fa-gem" style="margin-left: 15px;"></i><b class="theme" style="margin-right: 50px;"> {{ $question->user->theme }}</b>
            @endif
            {{ $question->created_at->format('d/m/Y') }}<i class="fas fa-eye" style="margin-left: 30px;"></i> 250
            <hr>
            <h5>{{ $question->title }}</h5>
            <a href="{{ route('show-question', $question->id) }}"><h6>{{ $question->answers->count() }} чавоб</h6></a>
            <hr>
            <p>{{Illuminate\Support\Str::limit($question->question, 200)}}... <a href="{{ route('show-question', $question->id) }}  ">Бештар</a></p>
            <br>
            <a href="{{ route('show-question', $question->id) }}" class="btn btn-primary ">Чавоб додан</a>
        </div>
    </div>
@endforeach
@if(!Auth::guest())
    <div class="mt-3">
        {{ $questions->links() }}
    </div>
@endif
@endsection



