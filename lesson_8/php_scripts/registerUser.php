<?php

session_start();

$link = mysqli_connect("172.18.0.3", "mike", "124356+A", "gbphp");

/* считать сырые данные из входного потока - POST-запроса в переменную $buf */
/* Данные приняты в формате JSON */
$buf = file_get_contents('php://input');


/* Преобразовать JSON данные переменной $buf в массив $buf */
$buf = json_decode($buf, true);

$passwd = password_hash($buf['password'],PASSWORD_BCRYPT);

if (($buf['login'] && $buf['surname'] && $buf['name'] && $buf['password']) == NULL) {

    $status = array();
    array_push($status,"Вы заполнили не все поля!");
    array_push($status,0);

    echo json_encode($status);
    exit;
    
} else {
    $sql = "SELECT * FROM users WHERE login='".$buf['login']."'";
    $res = mysqli_query($link, $sql);
};

if ($row = mysqli_fetch_assoc($res)) {

    $status = array();
    array_push($status,"Пользователь с таким именем уже зарегистрирован!");
    array_push($status,0);

    echo json_encode($status);
    exit;

} else {

    $userInfo = "'".$buf['login']."','".$buf['surname']."','".$buf['name']."','".$passwd."'";
    $sql = "INSERT INTO users (login,surname,name,password) VALUES (" . $userInfo . ")";
    
    $res = mysqli_query($link, $sql);

    /* Массив $status */
    /* - первый элемент - короткое сообщение пользователю; */
    /* - второй элемент - код возврата; */
    $status = array();
    array_push($status,"Вы зарегистрированы в системе!");
    array_push($status,1);

    /* Преобразование массива $status в формат JSON и отправка клиенту */ы
    echo json_encode($status);
    exit;
};

?>