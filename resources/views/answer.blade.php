@extends('layouts.super')
@section('content')
    @include('inc.question-creator')
    {{-- ДОДАНИ  ЧАВОБХО  --}}
    @include('inc.messages.sessionMessages')
    @include('inc.answer-form')
    {{--  ЧАВОБХО  --}}
    <div class="mx-auto mt-4 text-start text-uppercase"><h5><b>Чавобхо</b></h5></div>
    @include('inc.messages.infoMessages')
        @foreach($answers as $answer)
            <div class="card mx-auto mt-4">
                <div class="card__body">
                    @include('inc.answer-creator')
                    @include('inc.answer-btn-group')
                </div>
            </div>
        @endforeach
    @if(!Auth::guest())
        <div class="mt-3">
            {{ $answers->links() }}
        </div>
    @endif
@endsection
