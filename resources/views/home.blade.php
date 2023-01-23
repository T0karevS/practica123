@extends('layouts.app')

@section('content')
<link rel="stylesheet" href='{{ asset("css/mainpage.css") }}' >
    <title>Document</title>
</head>
<body>
    <!-- <header>
        <img class="logo" src="img\AGAT.svg" alt="">
        <div class="search-input">
            <input type="text" placeholder="Что ищешь?" class="search-text">
            <input type="button" class="search">
        </div>
        <div class="aboba">
            <img src="img/notification.svg" alt="">
            <div class="profile-mini" >
                <img class="avatar" src="img/chicha.png" alt="">
                <p class="name">Lil chicha</p>
                <img class="downbutton" src="img/down.png" alt="">
            </div>    
        </div>
    </header> -->
    <div class="menu-items">
        <div  class="menu-item">
            <a href="#">
                <img src="img/globus.svg" alt="">
                <p class="item-text">Новости</p>
            </a>
        </div>
        <div class="menu-item">
            <a href="#">
                <img src="img/user.svg" alt="">
                <p class="item-text">Профиль</p>
            </a>
        </div>
        <div class="menu-item">
            <a href="#">
                <img src="img/message.svg" alt="">
                <p class="item-text"> Диалоги</p>
            </a>
        </div>
        <div class="menu-item">
        <a href="#">
            <img src="img/users.svg" alt="">
            <p class="item-text">Друзья</p>
        </a>
        </div>
    </div>
    <div class="posts">
        <input type="text">
    </div>
    <div class="categories">
        <H2>Категории</H2>
        <div class="list">
            <div>
                <p>Спорт</p>
                <p>Кино</p>
                <p>Музыка</p>
                <p>IT</p>
            </div>
            <div>
                <p>Путешествия</p>
                <p>Политика</p>
                <p>Киберспорт</p>
                <p>Искусство</p>
            </div>    
        </div>
    </div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
