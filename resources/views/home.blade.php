@extends('layouts.super')
@section('content')
@foreach($questions as $question)
    @include('inc.messages.sessionMessages')

    @include('inc.question')
@endforeach
@if(!Auth::guest())
    <div class="mt-3">
        {{ $questions->links() }}
    </div>
@endif
@endsection



