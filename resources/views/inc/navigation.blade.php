<div class="fixed-links">
    <a href="{{ route('home') }}"><img class="logo" src="{{ asset('./assets/logo.svg') }}" alt="Логотип"></a>
    <ul class="list-unstyled mt-4">
    @if(Auth::guest())
        <!-- Меню для гостей -->
            <li class="mb-1"><a href="{{ route('home') }}"><i class="fas fa-question"></i> Саволҳо</a></li>
            <li class="mb-1"><a href="{{ route('add-question') }}"> <i class="fas fa-question-circle"></i> Савол диҳед</a></li>
            <li class="mb-1"><a href="#"><i class="fas fa-users"></i> Мавзӯҳои ҷомеа</a></li>
            <li class="mb-1"><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Даромад</a></li>
            <li class="mb-1"><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Бақайдгирӣ</a></li>
    @else
        <!-- Меню для авторизованных пользователей -->
            <li class="mb-1"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Асосӣ</a></li>
            <li class="mb-1"><a href="{{ route('profile') }}"><i class="fa fa-user"></i> Профил</a></li>
            <li class="mb-1"><a href="{{ route('add-question') }}"> <i class="fas fa-question-circle"></i> Савол диҳед</a></li>
            <li class="mb-1"><a href="#"><i class="fa fa-envelope"></i> Паёмҳо</a></li>
            <li class="mb-1"><a href="#"><i class="fa fa-bell"></i> Огоҳиномаҳо</a></li>
            <li class="mb-1"><a href="#"><i class="fa fa-cog"></i> Танзимотҳо</a></li>
            <li class="mb-1"><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Баромадан</a></li>

            @if(Auth::user()->role != 'expert')
                <li class="mb-1"><a href="{{ route('become-an-expert') }}"><i class="fa fa-gem"></i> Мутахассис шавед</a></li>
            @endif
        @endif
    </ul>
</div>
