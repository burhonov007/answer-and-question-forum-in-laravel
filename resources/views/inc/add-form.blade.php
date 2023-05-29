@extends('layouts.super')
@section('content')
    <div class="container">
        <div class="col-md-8">
            @include('inc.messages.sessionMessages')
            <form method="POST" action="{{ route('store-question') }}">
                @csrf
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3>Савол додан</h3>
                        <div class="form-group">
                            <label for="question-title">Сарлавҳаи савол</label>
                            <input type="text" value="{{old('title')}}" maxlength="250" autofocus class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Тафсилоти савол</label>
                            <textarea class="form-control" rows="8" id="question" name="question">{{old('question.blade.php')}}</textarea>
                        </div>
                            <button type="submit" class="btn btn-primary pull-right">Пешниҳод кунед</button>


                    </li>
                </ul>
            </form>
        </div>

    </div>

@endsection
