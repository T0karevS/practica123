<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset("css/mainpage.css") }}' >
    <title>Document</title>
</head>
<body>
    <header>
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
    </header>
    <!-- <div class="menu-items">
        <div  class="menu-item">
            <img src="img/globus.svg" alt="">
            <p class="item-text"><a href="#">Новости</a></p>
        </div>
        <div class="menu-item">
            <img src="img/user.svg" alt="">
            <p class="item-text"><a href="#">Профиль</a></p>
        </div>
        <div class="menu-item">
            <img src="img/message.svg" alt="">
            <p class="item-text"><a href="#"> Диалоги</a></p>
        </div>
        <div class="menu-item">
            <img src="img/users.svg" alt="">
            <p class="item-text"><a href="#">Друзья</a></p>
        </div>
    </div> -->
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
</body>
</html>