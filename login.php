
<?php
require "db.php";


$data = $_POST;
if (isset( $data['do_signin']))
{
    $errors = array();
    $user = R::findOne('user', 'login = ?', array( $data['login']));
    if ($user)
    {
        if (password_verify($data['password'],$user->password))
        {
         $_SESSION['logged_user'] = $user;
            echo '<div style="color:green;">Вы авторизованы!<br/> Можете перейти на <a href="#">главную</a> страницу!</div><hr>';

        }else
        {
            $errors[]='Неверный пароль';

        }
    }else
    {
        $errors[]='Неверный логин';
    }
    if (empty($errors))
    {
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
}


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать в BrainBoom</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>

<div class="header">
    <div class="logo">
        <a href="index.php"><img src="lg_br.png" width="135" height="95"></a>
    </div>
    <div class="txt_hdr">
        <h1>Brainboom Game</h1></br>
    </div>
</div>

<div class="login">
<form action="login.php" method="POST">
    <div class="clearfix"><h2>Авторизация:</h2>
        <p><span class="fontawesome-user"></span><input type="text" name="login" value="<?php echo @$data['login']; ?>" placeholder="Введите Ваш логин"></p>
        <p><span class="fontawesome-lock"></span><input type="password" name="password" value="<?php echo @$data['password']; ?>" placeholder="Введите Ваш пароль"></p>
        <p><input type="submit"  class="btn" name="do_signin" value="Войти"></p>
    </div>
</form>
</div>
</body>
</html>

