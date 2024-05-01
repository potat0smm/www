<?php
    include ("path.php");
    include ("app/controllers/users.php");
    global $errMsg;
    global $login;
    global $email;

?>
<!doctype html>
<html lang="en">
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
    <form class="row justify-content-md-center" method="post" action="reg.php" >
        <h2>Форма регистрации</h2>
        <div  class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="col-form-label">Ваш логин</label>
            <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" value="<?=$email?>" type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
            <div class="col-sm-10">
                <input name="pass_first" type="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="inputPassword4" class="col-sm-2 col-form-label">Повторите пароль</label>
            <div class="col-sm-10">
                <input name="pass_second" type="password" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
            <a href="login.php">Войти</a>
        </div>

    </form>
</div>

<!-- END FORM -->


<!-- footer -->

<?php include ("app/include/footer.php"); ?>

<!-- footer END -->
