<?php
session_start();

$link = mysqli_connect("172.18.0.3", "mike", "124356+A", "gbphp");

/* считать сырые данные из входного потока - POST-запроса в переменную $buf */
/* Данные приняты в формате JSON */
$buf = file_get_contents('php://input');

/* Преобразовать JSON данные переменной $buf в массив $buf */
$buf = json_decode($buf, true);

$sql = "SELECT login,password,is_admin FROM users WHERE login='" . $buf['login'] . "'";
$res = mysqli_query($link,$sql);

$row = mysqli_fetch_assoc($res);

/* проверка наличия пользователя в системе */
if ($row == NULL) {
    
    $status = array();
    array_push($status,"Пользователь не зарегистрирован в системе!");
    array_push($status,1);

    echo json_encode($status);
    exit;

/* Проверка правильности пароля */
} else if (password_verify($buf['password'],$row['password']) == false) {

    $status = array();
    array_push($status,"Вы ввели неверный пароль!");
    array_push($status,1);

    echo json_encode($status);
    exit;

/* Если пользователь зарегистрирован и пароль указан верно, разрешить вход */
} else if ((strcmp($row['login'], $buf['login']) == 0) && (password_verify($buf['password'],$row['password']) == true)) {

    $_SESSION['user'] = $buf['login'];

    /* Массив $status */
    /* - первый элемент - короткое сообщение пользователю; */
    /* - второй элемент - код возврата; */
    /* - третий элемент - признак того, что пользователь администратор. */
    $status = array();
    array_push($status,"Вы вошли в систему!");
    array_push($status,0);
    array_push($status,$row['is_admin']);

    /* Преобразование массива $status в формат JSON и отправка клиенту */
    echo json_encode($status);
    exit;

}

?>