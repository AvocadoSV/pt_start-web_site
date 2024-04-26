<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">

    <title>Герасимчук С.В.</title>
</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="col-3 nav_logo">
            </div>
            <div class="col-9">
                <div class="nav_text">Информация обо мне</div>
                <h4>Герасимчук Степан</h4>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <h4>анекдот - В зоопарке появилось объявление: «Не бросайте дельфинам бананы, во-первых они их
                            не едят,
                            а во-вторых голодные обезьяны прыгают и тонут»</h4>
                    </div>
                    <div class="col-4">
                        <div class="row my_photo"></div>
                        <h4>Герасимчук Степан</h4>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h2>Что-то тут написано</h2>
                <p>а тут побольше написано.</p>
                <hr>

                <h3>Мои навыки:</h3>
                <ul>
                    <li>Лежать</li>
                    <li>Есть</li>
                    <li>Отдыхать</li>
                </ul>

                <hr>
                <h3>Контакты:</h3>
                <ul>
                    <li>Email: krutoy_chel@mail.ru</li>
                    <li>Телефон: 8 (495) 224-22-22</li>
                </ul>

                <h3>Социальные сети:</h3>
                <ul>
                    <li><a href="ссылка на Instagram">Telegram</a></li>
                    <li><a href="ссылка на Twitter">VK</a></li>
                    <li><a href="ссылка на ICQ">ICQ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class=" button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form method="POST" action="profile.php" class="form-container">
                    <input type="text" class="form" name="title" placeholder="Заголовок вашего поста">
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста..."></textarea>
                    <button type="submit" class="btn_red" name="submit">Сохранить пост</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>

</html>

<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1','root','kali','first');

if (isset($_POST['submit'])){
    
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text){
        die ("Заполните все поля");
    }
    $sql = "INSERT INTO posts (title,main_text) VALUES ('$title', '$main_text')";
    
    if(!mysqli_query($link,$sql)) die("Не удалось добавить пост");
}