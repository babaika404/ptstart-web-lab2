<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сокольская Е.К.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body> 
    <div class="cpntainer">
        <div class="row">
            <div class="col-12">
                <h1>Авторизация</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <from method="POST" action="login.php">
                    <div class="row form_reg"><input class="form" type="text" name="login" placeholder="Login"></div>
                    <div class="row form_reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                    <button type="submit" class="btn_red btn_red" name="submit">Продолжить</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('bd.php');
$link = mysqli_connect('127.0.0.1', 'root', '1', 'first');

if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $password = $_POST['password'];

    if (!$username || !$password) die ('Пожалуйста введите все значения!');

    $sql = "SELECT * FROM users WHERE username='$login' AND passwod='$password'";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: profile.php');
    } else {
        echo "не правильное имя или пароль";
    }

}
?>
