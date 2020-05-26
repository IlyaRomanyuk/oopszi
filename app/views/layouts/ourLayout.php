<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/main.css">
    <title><?=$meta['title']?></title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <img src="/images/logo.png" alt="">
                </div>
                <div class="nav">
                    <b><?=$_SESSION['user']['login']?></b>
                    <a href="/">Главная</a>
                    <a href="/user/signup">Регистрация</a>
                    <a href="/user/login">Вход</a>
                    <a href="/user/logout">Выход</a>
                </div>
            </div>
            <?= $content?>
        </div>
    </div>

    <div class="modal">
    </div>

    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>