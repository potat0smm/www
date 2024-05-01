<?php
include ("app/database/db.php");

$errMsg = '';

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . "admin/admin.php");
    }else{
        header('location: ' . BASE_URL);
    }
}

//КОД ДЛЯ ФОРМЫ РЕГИСТРАЦИИ
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password_first = trim($_POST['pass_first']);
    $password_second = trim($_POST['pass_second']);

    if ($login === '' || $email === '' || $password_first === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($login,'UTF-8')<2){
        $errMsg = "Логин должен быть более 2-х символов";
    }elseif ($password_first !== $password_second){
        $errMsg = "Пароли в обоих полях должны соответствовать";
    }else{
        $existence = selectOne('users',['email' => $email]);
        if(!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else{
            $pass = password_hash($password_first, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email, // Пробел удален
                'password' => $pass
            ];
            $id = insert('users',$post);
            $user = selectOne('users',['id' => $id]);
            userAuth($user);

        }
    }
}else{
    $login = '';
    $email = '';
}
//КОД ДЛЯ ФОРМЫ АВТОРИЗАЦИИ
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password_login']);

    if ($email === '' || $password === '') {
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('users',['email' => $email]);
        if(!empty($existence && password_verify($password, $existence['password']))){
            userAuth($existence);
        }else{
            $errMsg = "Почта либо пароль введены неверно!";
        }
    }
}else{
    $email = '';
}
//    $password = password_hash($_POST['pass_second'], PASSWORD_DEFAULT);
// $last_row = selectOne('users', ['id' => $id]);
