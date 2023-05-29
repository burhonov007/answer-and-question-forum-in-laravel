@extends('layouts.super')
@section('content')
    <div class="container">
        <div class="col-md-8">
            @include('inc.messages.sessionMessages')
            <form method="POST" action="{{ route('store-to-become-expert') }}">
                @csrf
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3 class="mb-4">Мутахассис шудан</h3>
                        <div class="mb-3">
                            <label class="form-label">Дар бораи худ ба мо нақл кунед!</label>
                            <textarea class="form-control" name="biography" rows="3">{{old('biography')}}</textarea>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">Чои кори:</label>
                            <input type="text" value="{{old('work_experience')}}" name="work_experience" class="form-control"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">Чои хониш:</label>
                            <input type="text" value="{{old('study_place')}}" name="study_place" class="form-control"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Тамос:</label>
                            <input type="text" value="{{old('contact')}}" name="contact" class="form-control"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Мавзӯи тахассуси худро интихоб
                                кунед</label>
                            <select class="form-select" name="theme" aria-label="Default select example">
                                <option selected>интихоб кунед</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label">Дар бораи тахассуси худ маълумот дихед</label>
                            <textarea class="form-control" name="short_description" rows="3">{{old('short_description')}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Пешниҳод кунед</button>
                    </li>
                </ul>
            </form>
        </div>

    </div>

@endsection
