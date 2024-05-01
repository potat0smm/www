<?php
    include ("path.php");
    include ("app/controllers/users.php");
    global $errMsg;
    global $email;
?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/3a6f1bcfc0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<!-- HEADER -->

<?php include ("app/include/header.php"); ?>

<!-- END HEADER -->

<!-- FORM -->
<div class="container reg_form">
    <form class="row justify-content-md-center" method="post" action="login.php" >
        <h2 class="col-12">Авторизация</h2>
        <div  class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="col-form-label">Ваша почта</label>
            <input name="email" value="<?=$email?>" type="email" class="form-control" id="inputEmail3" placeholder="введите вашу почту...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
            <div class="col-sm-10">
                <input name="password_login" type="password" class="form-control" id="inputPassword3" placeholder="введите ваш пароль...">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" name="button-log" class="btn btn-secondary">Войти</button>
            <a href="reg.php">Зарегистрироваться</a>
        </div>

    </form>
</div>

<!-- END FORM -->


<!-- footer -->

<?php include ("app/include/footer.php"); ?>

<!-- footer END -->