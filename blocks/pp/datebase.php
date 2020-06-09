<?php

    $link = mysqli_connect ('127.0.0.1:3306','root','','branch');

    if(mysqli_connect_errno() )
    
        echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '. mysqli_connect_error();
        exit();
    
    ?>