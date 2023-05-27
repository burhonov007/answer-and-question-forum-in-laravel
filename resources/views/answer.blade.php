@extends('layouts.super')
@section('content')
    <div>
        <a href="{{ route('home') }}" class="btn btn-outline-primary"></i>Ба кафо</a>
    </div>
    <div class="card mx-auto mt-4">
        <div class="card__body">
            <img src="{{ asset('./assets/avatar.svg') }}" style="margin-right: 15px;" class="rounded-circle-avatar" alt="Аватар"><b>{{ $question->user->name }}</b>
            <i class="fas fa-gem" style="margin-left: 15px;"></i><b class="theme" style="margin-right: 50px;"> Спорт</b>
            {{ $question->created_at->format('d/m/Y') }}<i class="fas fa-eye" style="margin-left: 20px;"></i> 250
            <hr>
            <h5>{{ $question->title }}</h5>
            <a href="{{ route('show-question', $question->id) }}"><h6>{{ $question->answers->count() }} чавоб</h6></a>
            <hr>
            <p>{{$question->question}}</p>
            <br>
        </div>
    </div>

{{-- ДОДАНИ  ЧАВОБХО  --}}
    @include('sessionMessages')
    <div class="mx-auto mt-4 text-start text-uppercase"><h5><b>Чавоб додан</b></h5></div>
    <div class="card mx-auto mt-4">
        @if (Auth::guest())
            <div class="card__body">
            <textarea disabled rows="1" class="form-control rounded-1 mb-3">Лутфан ворид шавед ё сабти ном кунед, то ҷавоб илова кунед</textarea>
                <button class="btn btn-outline-primary">Ворид шавед</button>
                <button class="btn btn-outline-success">Ба қайд гиред</button>
            </div>
        @else
            <form method="post" action="{{ route('store-answer') }}">
                @csrf
                <input hidden type="text" value="{{$question->id}}"  class="form-control"  name="question_id">
                <textarea name="answer" rows="2" class="form-control border-4"></textarea>
                <button type="submit" class="btn btn-primary mt-3">Чавоб</button>
            </form>
        @endif
    </div>


{{--  ЧАВОБХО  --}}
    <div class="mx-auto mt-4 text-start text-uppercase"><h5><b>Чавобхо</b></h5></div>

    @include('infoMessages')
    @if(isset($question->answers))
    @foreach($question->answers as $answer)
        <div class="card mx-auto mt-4">
            <div class="card__body">
                <img src="{{ asset('./assets/avatar.svg') }}" style="margin-right: 15px;"
                     class="rounded-circle-avatar" alt="Аватар">Чавоб дод <b>{{ $answer->user->name }}</b>
                <i class="fas fa-gem" style="margin-left: 15px;"></i><b class="theme" style="margin-right: 50px;">Спорт</b>
                {{ $answer->created_at->format('d/m/Y') }}<i class="fas fa-eye" style="margin-left: 20px;"></i> 250
                <hr>
                <p class="mb-3 " >{{ $answer->answer }}</p>
                        <div class="btn-group" role="group" style="margin-bottom: 10px;">
                            <form action="{{ route('answers-like', $answer->id) }}" method="POST" style="margin-right: 10px;">
                                @csrf
                                <button type="submit" class="btn btn-primary rounded"><i class="fas fa-thumbs-up"></i>
                                  {{ $answer->likes->count() }}
                                </button>
                                <input hidden type="text" value="{{Auth::user()->id}}"  class="form-control"  name="user_id">

                            </form>
                            <form action="{{ route('answers-dislike', $answer->id) }}" method="POST" style="margin-right: 10px;">
                                @csrf
                                <button type="submit" class="btn btn-danger rounded"><i class="fas fa-thumbs-down"></i>
                                    {{ $answer->dislikes->count() }}
                                </button>
                                <input hidden type="text" value="{{Auth::user()->id}}"  class="form-control"  name="user_id">
                            </form>
                            <button type="submit" class="btn btn-secondary rounded"><i class="fas fa-comments"></i> 20</button>
                        </div>
            </div>
        </div>

    @endforeach
    @else
        <div class="mx-auto mt-4 text-start text-info text-uppercase"><h6><b>Холо ягон нафар чавоб нанавиштааст!!!</b></h6></div>
    @endif

@endsection
