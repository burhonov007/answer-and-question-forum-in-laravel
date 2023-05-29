<div class="mx-auto mt-4 text-start text-uppercase"><h5><b>Навиштани комментарий</b></h5></div>
<div class="card mx-auto mt-4">
    @if (Auth::guest())
        @include('inc.ifGuest')
    @else
        <form method="post" action="{{ route('store-comment') }}">
            @csrf
            <input hidden type="text" value="{{$answer->id}}"  class="form-control"  name="answer_id">
            <input hidden type="text" value="{{ Auth::user()->id}}"  class="form-control"  name="user_id">
            <textarea name="comment" rows="2" class="form-control border-4"></textarea>
            <button type="submit" class="btn btn-primary mt-3">Нашри комментарий</button>
        </form>
    @endif
</div>
