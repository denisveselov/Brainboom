<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать в BrainBoom</title>
    <link rel="stylesheet" href="../pj_brainboom/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../pj_brainboom/bootstrap/css/bootstrap-theme.min.css">

</head>
<body>
<div class="header">
    <div class="logo">
        <img src="lg_br.png" width="135" height="95">
    </div>
    <div class="txt_hdr">
        <h1>Brainboom Game</h1></br>
    </div>

<div class="container">
    <div class="dropdown">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Выберите тур:
            <div class="caret"></div>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#"></a>Тур 1:</li>
            <li><a href="#"></a>Тур 2:</li>
            <li><a href="#"></a>Тур 3:</li>
            <li><a href="#"></a>Тур 4:</li>
            <li><a href="#"></a>Тур 5:</li>
            <li><a href="#"></a>Тур 6:</li>
            <li><a href="#"></a>Тур 7:</li>
        </ul>
    </div>
</div>
<script src="../pj_brainboom/bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
