<?php
        $host = 'localhost'; // адрес сервера 
        $database = 's747191p_dos717'; // имя базы данных
        $user = 's747191p_dos717'; // имя пользователя
        $password = 'Lada2106'; // пароль

        $link = mysqli_connect('$host','$database','$user','$password');

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    echo "Соединение с MySQL установлено!" . PHP_EOL;
    echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
    mysqli_close($link);
    

?>
