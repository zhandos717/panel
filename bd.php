    <?php require "blocks/header.php"; ?>
      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Образцы
      <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
      <li class="active">Образцы</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      
                        <section class="content-header">
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="box box-solid box-info">
                                    <div class="box-header text-center">
                                    <strong> Проверьте данные несколько раз перед отправкой</strong>
                                    </div>
                                    <div class="box-body">
                                    
                                   
                                    <?php
                                    //require_once 'blocks/include/datebase.php'; // подключаем скрипт
                                    
                                    /*// подключаемся к серверу
                                    $link = mysqli_connect($host, $user, $password, $database) 
                                        or die("Ошибка " . mysqli_error($link));
                                    
                                    // выполняем операции с базой данных
                                    $query ="SELECT * FROM phones";
                                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                                    if($result)
                                    {
                                        echo "Выполнение запроса прошло успешно";
                                    }
                                    
                                    // закрываем подключение
                                    mysqli_close($link);

                                    
                                    $link = mysqli_connect($host, $user, $password, $database) 
                                        or die("Ошибка " . mysqli_error($link));
                                    
                                    $query ="CREATE Table tovars
                                    (
                                        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                        name VARCHAR(200) NOT NULL,
                                        company VARCHAR(200) NOT NULL
                                    )";
                                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                                    if($result)
                                    {
                                        echo "Создание таблицы прошло успешно";
                                    }
                                    
                                    mysqli_close($link);
                                  
                                    
                                    if(isset($_POST['name']) && isset($_POST['company'])){
                                    
                                        // подключаемся к серверу
                                        $link = mysqli_connect($host, $user, $password, $database) 
                                            or die("Ошибка " . mysqli_error($link)); 
                                        
                                        // экранирования символов для mysql
                                        $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
                                        $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));
                                        
                                        // создание строки запроса
                                        $query ="INSERT INTO tovars VALUES(NULL, '$name','$company')";
                                        
                                        // выполняем запрос
                                        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                                        if($result)
                                        {
                                            echo "<span style='color:blue;'> Данные добавлены</span>";
                                        }
                                        
                                        // закрываем подключение
                                        mysqli_close($link);
                                    }
                                    ?>
                                    <h2>Добавить новую модель</h2>
                                    <form method="POST">
                                    <p>Введите модель:<br> 
                                    <input type="text" name="name" /></p>
                                    <p>Производитель: <br> 
                                    <input type="text" name="company" /></p>
                                    <input type="submit" value="Добавить">
                                    </form>

                                    <?php
                                            
                                            
                                            $link = mysqli_connect($host, $user, $password, $database) 
                                                or die("Ошибка " . mysqli_error($link)); 
                                                
                                            $query ="SELECT * FROM tovars";
                                            
                                            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                                            if($result)
                                            {
                                                $rows = mysqli_num_rows($result); // количество полученных строк
                                                
                                                echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
                                                for ($i = 0 ; $i < $rows ; ++$i)
                                                {
                                                    $row = mysqli_fetch_row($result);
                                                    echo "<tr>";
                                                        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
                                                    echo "</tr>";
                                                }
                                                echo "</table>";
                                                
                                                // очищаем результат
                                                mysqli_free_result($result);
                                            }
                                            
                                            mysqli_close($link);*/
                                            
                                            ?>


                                    </div><!-- /.box-body -->
                                <div class="box-footer text-center ">
                                
                                </div><!-- box-footer -->
                            </div><!-- /.box -->

<!------------------------------------------------------------------------------------------------------>


                            <div class="box box-solid box-info">
                                    <div class="box-header text-center">
                                    <strong> Проверьте данные несколько раз перед отправкой</strong>
                                    </div>
                                    <div class="box-body">
                                    
                                   
                                    <?php/*
                                             // подключаем скрипт
                                            // подключаемся к серверу
                                            $link = mysqli_connect($host, $user, $password, $database) 
                                                    or die("Ошибка " . mysqli_error($link)); 
                                                
                                            // если запрос POST 
                                            if(isset($_POST['name']) && isset($_POST['company']) && isset($_POST['id'])){
                                            
                                                $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
                                                $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
                                                $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));
                                                
                                                $query ="UPDATE tovars SET name='$name', company='$company' WHERE id='$id'";
                                                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                                            
                                                if($result)
                                                    echo "<span style='color:blue;'>Данные обновлены</span>";
                                            }
                                            
                                            // если запрос GET
                                            if(isset($_GET['id']))
                                            {   
                                                $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
                                                
                                                // создание строки запроса
                                                $query ="SELECT * FROM tovars WHERE id = '$id'";
                                                // выполняем запрос
                                                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                                                //если в запросе более нуля строк
                                                if($result && mysqli_num_rows($result)>0) 
                                                {
                                                    $row = mysqli_fetch_row($result); // получаем первую строку
                                                    $name = $row[1];
                                                    $company = $row[2];
                                                    
                                                    echo "<h2>Изменить модель</h2>
                                                        <form method='POST'>
                                                        <input type='hidden' name='id' value='$id' />
                                                        <p>Введите модель:<br> 
                                                        <input type='text' name='name' value='$name' /></p>
                                                        <p>Производитель: <br> 
                                                        <input type='text' name='company' value='$company' /></p>
                                                        <input type='submit' value='Сохранить'>
                                                        </form>";
                                                    
                                                    mysqli_free_result($result);
                                                }
                                            }
                                            // закрываем подключение
                                            mysqli_close($link);*/
                                            ?> 
                                            

                                    </div><!-- /.box-body -->
                                <div class="box-footer text-center ">
                                
                                </div><!-- box-footer -->
                            </div><!-- /.box -->
                                                 
                            </div>  <!--/.col-->         
                            </div><!-- /.row -->
                        </section >  <!--class="content-header"--> 
                        </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->              
     <?php require "blocks/footer.php"?> 
         
      
    