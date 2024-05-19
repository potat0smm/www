<?php

include SITE_ROOT . "/app/database/db.php";

$errMsg = '';
$id ='';
$name ='';
$description = '';
$topics = selectAll('topics');


//ФОРМА СОЗДАНИЯ КАТЕГОРИИ
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($name,'UTF-8')<2){
        $errMsg = "Категория должна быть более 2-х символов";
    }else{
        $existence = selectOne('topics',['name' => $name]);
        if(!empty($existence['name']) && $existence['name'] === $name){
            $errMsg = "Такая категория уже есть в базе";
        }else{
            $topic = [
                'name' => $name,
                'description' => $description
            ];
            $id = insert('topics',$topic);
            $topic = selectOne('topics',['id' => $id]);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }
}else{
    $login = '';
    $email = '';
}

//Редактировать категории

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne('topics',['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}
//UPDATE
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($name,'UTF-8')<2){
        $errMsg = "Категория должна быть более 2-х символов";
    }else{
        $topic = [
            'name' => $name,
            'description' => $description
        ];
        $id = $_POST['id'];
        $topic_id = update('topics', $id,$topic);
        header('location: ' . BASE_URL . 'admin/topics/index.php');
    }

}

//Удаление категории

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    delete('topics',$id);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}