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
        <p class="enter">Регистрация</p>
        <p class="register">Уже есть аккаунт? <a href="/authorisation" class="register-link">Авторизироваться</a></p>
        <div class="innerdiv">
            <p class="login-p">Login</p>
            <input class="login" type="login">
            <p class="email-p">Email</p>
            <input class="email" type="email">
            <p class="password-p">Password</p>
            <input class="password" type="password">
            <p class="r-password-p">Password</p>
            <input class="r-password" type="password">
            <button>Зарегистрироваться</button>
        </div>
    </div>  
</body>
</html>