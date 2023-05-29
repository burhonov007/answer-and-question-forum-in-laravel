<!DOCTYPE html>
<html>
<head>
    <title>Саволхо</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>

        body{
            background-color: #B1B2FF;
        }

        a{
            text-decoration: none;
        }
        li a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        .left-block {
            padding: 20px;
            top: 0;
            left: 0;
        }

        .right-block {
            padding: 20px;

        }

        .fixed-links {
            margin-left: 20px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 20px;
            text-decoration: none;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 15%;
            background-image: url("./assets/ava.jpg");
            background-position: center;
            background-size: cover;
            position: relative;
            margin-right: 5px;
        }

        .avatar .checkmark {
            position: absolute;
            bottom: -10%;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            background-image: url("./assets/checkmark.svg");
            background-position: center;
            background-size: cover;
        }

        .card {
            border-radius: 15px;
            background-color: #AAC4FF;
            padding: 20px;
        }

        .logo {
            max-width: 180px;
            height: auto;
        }

        .fa-link {
            color: deepskyblue;
        }

        .card__body {
            margin: 0 10px;
        }

        .rounded-circle-avatar {
            max-width: 4%;
        }

        .rounded-circle {
            max-width: 1%;
        }

        .fa-gem,
        .theme {
            color: black;
        }

        .list-group-item{
           background-color: #AAC4FF;
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-3 left-block">
            <div class="fixed-links">
                <a href="{{ route('home') }}"><img class="logo" src="{{ asset('./assets/logo.svg') }}" alt="Логотип"></a>
                <ul class="list-unstyled mt-4">
                @if(Auth::guest())
                    <!-- Меню для гостей -->
                        <li class="mb-1"><a href="{{ route('home') }}"><i class="fas fa-question"></i> Вопросы</a></li>
                        <li class="mb-1"><a href="{{ route('add-question') }}"> <i class="fas fa-question-circle"></i> Задать вопрос</a></li>
                        <li class="mb-1"><a href="#"><i class="fas fa-users"></i> Темы сообщества</a></li>
                        <li class="mb-1"><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Вход</a></li>
                        <li class="mb-1"><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Регистрация</a></li>
                @else
                    <!-- Меню для авторизованных пользователей -->
                        <li class="mb-1"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Главная</a></li>
                        <li class="mb-1"><a href="{{ route('profile') }}"><i class="fa fa-user"></i> Профиль</a></li>
                        <li class="mb-1"><a href="{{ route('add-question') }}"> <i class="fas fa-question-circle"></i> Задать вопрос</a></li>
                        <li class="mb-1"><a href="#"><i class="fa fa-envelope"></i> Сообщения</a></li>
                        <li class="mb-1"><a href="#"><i class="fa fa-bell"></i> Уведомления</a></li>
                        <li class="mb-1"><a href="#"><i class="fa fa-cog"></i> Настройки</a></li>
                        <li class="mb-1"><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Выйти</a></li>

                        @if(Auth::user()->role != 'expert')
                            <li class="mb-1"><a href="{{ route('become-an-expert') }}"><i class="fa fa-gem"></i><b class="theme">Стать экспертом</b></a></li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-9 right-block">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
