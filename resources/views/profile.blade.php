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
    @include('infoMessages')
    @if($answerCount    != 0)
    @foreach($answers as $answer)
        <div class="card mx-auto mt-4">
            <div class="card__body">
                <img src="{{ asset('./assets/avatar.svg') }}" style="margin-right: 15px;"
                     class="rounded-circle-avatar" alt="Аватар">Чавоб дод <b>{{ $answer->user->name }}</b>
                <i class="fas fa-gem" style="margin-left: 15px;"></i><b class="theme" style="margin-right: 50px;">Спорт</b>
                {{ $answer->created_at->format('d/m/Y') }}<i class="fas fa-eye" style="margin-left: 20px;"></i> 250
                <hr>
                <p class="mb-3">{{ $answer->answer }}<p>
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
    <div class="mt-3">
        {{ $answers->links() }}
    </div>
    @else
        <div class="mx-auto mt-4 text-start text-info text-uppercase"><h6><b>Шумо холо чавоб нанавиштаед!!!</b></h6></div>
    @endif
@endsection
