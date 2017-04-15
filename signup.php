
<?php
require "db.php";

$data = $_POST;
if( isset ( $data ['do_signup']))

  {

$errors=array();
    if( trim($data['login'])=='')

    {
    $errors[]='Введите логин';
    }

    if( trim($data['email'])=='')

    {
          $errors[]='Введите email';
    }

    if( $data['password']=='')

    {
          $errors[]='Введите пароль';
    }

      if( $data['password_2']!=$data['password'])

    {
          $errors[]='Повторный пароль введен неверно';
    }
      if( R::count('users',"login=?", array($data['login']))>0)
      {
          $errors[]='Пользователь с таким логином уже зарегистрирован!';
      }
      if( R::count('users',"email=?", array($data['email']))>0)
      {
          $errors[]='Пользователь с таким логином уже зарегистрирован!';
      }

    if (empty($errors)){
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->team = $data['team'];
        R::store('user');
        echo '<div style="color:green;">Поздравляем! Вы успешно зарегистрированы!</div><hr>';
    } else
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
    <div class="login">
        <form action="signup.php" method="POST">
             <div class="clearfix"><h2>Регистрация:</h2>
                 <p><span class="fontawesome-user"></span><input type="text" name="login" value="<?php echo @$data['login']; ?>" placeholder="Введите Ваш логин"></p>
                 <p><span class="fontawesome-user"></span><input type="text" name="email" value="<?php echo @$data['email']; ?>" placeholder="Введите Ваш e-mail"></p>
                 <p><span class="fontawesome-lock"></span><input type="password" name="password" value="<?php echo @$data['password']; ?>" placeholder="Введите Ваш пароль"></p>
                 <p><span class="fontawesome-lock"></span><input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>" placeholder="Введите Ваш пароль еще раз"></p>
                 <p><span class="fontawesome-user"></span><input type="text" name="team" value="<?php echo @$data['team']; ?>" placeholder="Название команды"></p>

                 <p><input type="submit"  class="btn" name="do_signup" value="Зарегистрироваться"></p>
             </div>
        </form>
    </div>
</body>
</html>