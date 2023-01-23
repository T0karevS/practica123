<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset("css/app.css") }}' >
    <title>Document</title>
</head>
<body>
    <div class="logotype"> 
        <img src="img\AGAT.svg" class="logo">
    </div>
    <div class="authorisation">
        <p class="enter">Вход в систему</p>
        <p class="register">Не зарегистрированы? <a href="/registration" class="register-link">зарегистрироваться</a></p>
        <div class="innerdiv">
            <p class="login-p">Login</p>
            <input class="login" type="login">
            <p class="password-p">Password</p>
            <input class="password" type="password">
            <button>Войти</button>
        </div>
    </div>  

</body>
</html>