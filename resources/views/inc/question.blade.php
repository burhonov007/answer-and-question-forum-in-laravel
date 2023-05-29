<div class="card mx-auto mt-4">
    <div class="card__body">
        <img src="{{ asset('./assets/avatar.svg') }}" style="margin-right: 15px;" class="rounded-circle-avatar" alt="Аватар"><b>{{ $question->user->name }}</b>
        @if($question->user->role == 'expert')
            <i class="fas fa-gem" style="margin-left: 15px;"></i>
        @endif
                <b class="theme" style="margin-right: 50px;"> {{ $question->user->theme }}</b>
        <a style="margin-left: 50px">Эҷод карда шуд {{ $question->created_at->format('d/m/Y') }}</a>
        <hr>
        <h5>{{ $question->title }}</h5>
        <a href="{{ route('show-question', $question->id) }}">{{ $question->answers->count() }} чавоб</a>
        <hr>
        <p style="margin-bottom: -10px">
            @if (strlen($question->question) > 80)
                {{ substr($question->question, 0, 220) }}...
                <a  href="{{ route('show-question', $question->id) }}">Бештар</a>
            @else
                {{ $question->question }}
            @endif
        </p>

        <br>
    </div>
</div>
