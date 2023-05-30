<img src="{{ asset('./assets/avatar.svg') }}" style="margin-right: 15px;"
     class="rounded-circle-avatar" alt="Аватар">Чавоб дод    <b>{{ $answer->user->name }}</b>

    @if($answer->user->role == 'expert')
        <i class="fas fa-gem" style="margin-left: 15px;"></i>
    @endif
    @if($answer->user->theme != null)
        <b style="margin-right: 30px;"> {{ $answer->user->theme }}</b>
    @endif

<a style="margin-left: 50px">Эҷод карда шуд {{ $answer->question->created_at->format('d/m/Y') }}</a>
<hr>
<p class="mb-3 " >{{ $answer->answer }}</p>
