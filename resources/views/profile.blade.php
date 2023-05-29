@extends('layouts.super')
@section('content')
    {{--  profile  --}}

    <div class="card mx-auto">
        <div class="row">
            <div class="col-2">
                <div class="avatar">
                    @if($user->role == 'expert')
                        <div class="checkmark"></div>
                    @endif
                </div>
            </div>
            <div class="col-9">
                <h2>{{ $user->name }}</h2>
                    @if($user->role == 'expert')
                        <i class="fas fa-gem"></i><b class="theme" style="margin-right: 50px;">
                            @endif
                            <a> {{ $user->theme }}</a>

                <p>{{ $user->short_description }}</p>
                <a href="#">{{ $user->contact }} </a>
            </div>
        </div>
    </div>

{{--  biography  --}}
    @if(Auth::user()->role == 'expert')
        <div class="card mx-auto mt-4">
            <div class="card__body">
                <p class="card-text">{{ $user->biography }}</p>
                <button class="btn btn-info"><i class="fas fa-bolt"></i> 500</button>
                <hr>
                <h5>Таҷрибаи корӣ</h5>
                <i class="fas fa-briefcase"></i> {{ $user->work_experience }}
                <hr>
                <h5>Ҷои хониш</h5>
                <i class="fas fa-graduation-cap"></i> {{ $user->study_place }}
                <hr>
                <h5>Тамос</h5>
                <i class="fas fa-link"></i> <a href="#">{{ $user->contact }}</a>
                <hr>
                <p><b>{{ $answerCount }}</b> ҷавоб <b>8</b> паём <b>{{ $user->followers }}</b> подписчик</p>
            </div>
        </div>
    @endif


    <div class="mx-auto mt-4 text-start text-uppercase"><h5><b>Чавобхои шумо</b></h5></div>
    @include('inc.messages.infoMessages')
    @if($answerCount    != 0)
    @foreach($answers as $answer)
        <div class="card mx-auto mt-4">
            <div class="card__body">
                @include('inc.answer-creator')
                @include('inc.answer-btn-group')
            </div>
        </div>



    @endforeach
    <div class="mt-3">
        {{ $answers->links() }}
    </div>
    @else
        <div class="mx-auto mt-4 text-start text-info text-uppercase"><h6><b>Шумо холо чавоб нанавиштаед!!!</b></h6></div>
    @endif
@endsection
