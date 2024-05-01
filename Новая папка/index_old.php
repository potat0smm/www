<?php

require 'setting.php';

$connection = new mysqli($host, $user, $pass, $data);
if($connection->connect_error) die ('Error connection');

//запрос данных
$query = "SELECT * FROM users ";
$result = $connection->query($query);

if(!$result) die ('Error result');

$rows = $result ->num_rows;

for ($i = 0; $i < $rows; ++$i){
    $result->data_seek($i);
    echo 'Name: ' .$result->fetch_assoc()['name'] . ' ';
    echo 'id: ' .$result->fetch_assoc()['id_user'] . '<br>';

}

$result->close();
$connection->close();

//echo '<pre>';
//print_r($rows);
//echo '</pre>';






//require 'connect.php';

//$connection = new PDO("mysql:host=localhost;dbname=mytest;charset=utf8",'root','mysql');

//$query = "INSERT users (name, age, login) VALUE ('Антоха','22','Зоха')";
//$count = $connection->exec($query);


//$name = 'Kolya';
//$age = 34;
//$login = 'ser333';

//$param = [
//  'n' => $name,
//'age' => $age,
//'login' => $login
//];

//$sql = "INSERT users (name, age, login) VALUE (:n, :age, :login)";
//$query = $connection->prepare($sql);

//$query->execute($param);
