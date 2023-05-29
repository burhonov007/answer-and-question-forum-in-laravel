<img src="{{ asset('./assets/avatar.svg') }}" style="margin-right: 15px;"
     class="rounded-circle-avatar" alt="Аватар">Комментарияро навишт  <b>{{ $comment->user->name }}</b>
@if($comment->user->role == 'user')
    @if($comment->user->role == 'expert')
        <i class="fas fa-gem" style="margin-left: 15px;"></i>
    @endif
    @if($comment->user->theme != null)
        <b class="theme" style="margin: 0 30px;"> {{ $comment->user->theme }}</b>
    @endif
@endif
<a style="margin-left: 50px">Эҷод карда шуд {{ $comment->created_at->format('d/m/Y') }}</a>
<hr>
<p class="mb-3 " >{{ $comment->comment }}</p>
