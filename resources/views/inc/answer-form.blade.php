<div class="mx-auto mt-4 text-start text-uppercase"><h5><b>Чавоб додан</b></h5></div>
<div class="card mx-auto mt-4">
    @if (Auth::guest())
        @include('inc.ifGuest')
    @else
        <form method="post" action="{{ route('store-answer') }}">
            @csrf
            <input hidden type="text" value="{{$question->id}}"  class="form-control"  name="question_id">
            <textarea name="answer" rows="2" class="form-control border-4"></textarea>
            <button type="submit" class="btn btn-primary mt-3">Чавоб</button>
        </form>
    @endif
</div>
