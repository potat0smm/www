<?php

session_start();
require 'connect.php';
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
    exit();
}
global $pdo;

function dbCheckError($query){
    $error_info = $query->errorInfo();
    if($error_info[0] !== PDO::ERR_NONE){
        echo $error_info[2];
        exit();
    }
    return true;
}

//Запрос на получение данных c одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }

    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

//Запрос на получение одной строки c выбранной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }

    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

//Записи в таблицу БД
function insert($table, $params){
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value){
        if($i === 0 ){
            $coll = $coll . "$key";
            $mask = $mask ."'" . "$value"."'";
        }else{
            $coll = $coll . ", $key";
            $mask = $mask .", '" . "$value"."'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}

//Обновление строки в таблице
function update($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if($i === 0 ){
            $str = $str .$key . " = '" . $value ."'";
        }else{
            $str = $str .", " . $key ." = '" . $value ."'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

//Обновление строки в таблице
function delete($table, $id){
    global $pdo;
    //DELETE FROM `users` WHERE id = 8
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

//Выборка записей (posts) с автором в админку
    function selectAllFromPostsWithUsers($table1, $table2)
    {
        global $pdo;
        $sql = "
        SELECT 
        t1.id,
        t1.title,
        t1.img,
        t1.content,
        t1.status,
        t1.id_topic,
        t1.created_date,
        t2.username
        FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id
        ";
        $query = $pdo->prepare($sql);
        $query->execute();
        dbCheckError($query);
        return $query->fetchAll();
    }

