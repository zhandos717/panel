 
 <?php require "blocks/header.php"?>


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
    
 <section class="content"> 
            
             
             
             
             
             
             
             
             
             
             
             
          <div class="box box-info"> <!--Кассовые операции-->
                        
                        <div class="box-header with-border">
                          <h3 class="box-title">Кассовые операции на  <?php
                                // Вывод даты на русском
                                $monthes = array(
                                    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                                    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                                    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
                                );
                                echo(date('d ') . $monthes[(date('n'))] . date(' Y года'));
                                 
                              /*  // Вывод дня недели
                                echo('<br />');
                                $days = array(
                                    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
                                    'Четверг', 'Пятница', 'Суббота'
                                );
                                echo($days[(date('w'))] . date(', H:i'));*/
                                ?></h3>
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                          
                        </div>
                        <!-- /.box-header -->
                        </div>
                          <div class="box-body">
                          <div class="input-group" >
                          <div class="has-feedback">

                            <input type="text"  id="search-text" class="form-control input-sm" name="table_search" placeholder="Поиск..." onkeyup="tableSearchzz()">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                          </div>
                          </div>
                          <!--<label>&ensp; Финансовые передвижения за период </label> -->
                         
                   

                        
                                <br/>
                          <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Регион</th>
                                <th>Дата проведения  операции</th>
                                <th>Корреспондирующий счет</th>
                                <th>Вид операции</th>
                                <th>Адрес филиала</th>
                                <th>Сумма</th>
                                <th>Касса</th>
                                <th>Статус</th>
                                <th>Дополнительная  информация</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>Алматы</td>
                                    <td>15.05.2020</td>
                                    <td>1255</td>
                                    <td><span class="label label-success"><b>Пополнения</b></span></td>
                                    <td>Назарбаева 118</td>
                                    <td>2 000 000</td>
                                    <td>Касса №2</td>
                                    <td><span class="label label-warning"> В пути </span></td>
                                    <td>Пополнение с 2 кассы Минина 24</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>Алматы</td>
                                    <td>14.05.2020</td>
                                    <td>1255</td>
                                    <td><span class="label label-danger"><b>Изъятие</b></span></td>
                                    <td>Кабанбай батыра 2</td>
                                    <td>1 500 000</td>
                                    <td>Касса №1</td>
                                    <td><span class="label label-success"> Выполнено </span></td>
                                    <td>Пополнение с 5 кассы Минина 24</td>
                                  </tr>
                                  <tr>
                                    <td>Нур-Султан</td>
                                    <td>14.05.2020</td>
                                    <td>1255</td>
                                    <td><span class="label label-success"><b>Пополнения</b></span></td>
                                    <td>Абылай Хана 6</td>
                                    <td>1 500 000</td>
                                    <td>Касса №2</td>
                                    <td><span class="label label-info"> Сформирован </span></td>
                                    <td>Пополнение с 5 кассы Сатпаева 23/1</td>
                                  </tr>
                            
                              </tbody>
                            </table>
                          </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                          <!--<a href="javascript:void(0)" class="btn btn-sm btn-success btn-flat pull-left glyphicon glyphicon-usd"> <b>Новая операция </b></a>-->

                          <button class="btn btn-sm btn-success btn-flat pull-left  fa fa-plus-square" data-toggle="modal" data-target="#modal-success"> Новая операция </button>
                          <!--<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>-->
                        </div>
                        <!-- /.box-footer -->
                      </div><!--Кассовые операции-->
                      
                     


                      <div class="box box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title">Наличность в кассах на
                              <?php
                                // Вывод даты на русском
                                $monthes = array(
                                    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                                    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                                    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
                                );
                                echo(date('d ') . $monthes[(date('n'))] . date(' Y года'));
                                 
                              /*  // Вывод дня недели
                                echo('<br />');
                                $days = array(
                                    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
                                    'Четверг', 'Пятница', 'Суббота'
                                );
                                echo($days[(date('w'))] . date(', H:i'));*/
                                ?>
                          </h3>
                         
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                        <div class="input-group" style="width: 150px;">
                         <div class="has-feedback">
                            <!--<input type="text"  id="search-text" class="form-control input-sm" name="input" placeholder="Поиск..." onkeyup="tableSearch()">-->
                            <input type="text" name="table_search" class="form-control input-sm pull-right" id="input" placeholder="Поиск..." onkeyup="tableSearch()">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                          </div>
                            </div>
                             <script>
                                                function tableSearch() {
                                                    var phrase = document.getElementById('input');
                                                    var table = document.getElementById('example');
                                                    var regPhrase = new RegExp(phrase.value, 'i');
                                                    var flag = false;
                                                    for (var i = 1; i < table.rows.length; i++) {
                                                        flag = false;
                                                        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                                                            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                                                            if (flag) break;
                                                        }
                                                        if (flag) {
                                                            table.rows[i].style.display = "";
                                                        } else {
                                                            table.rows[i].style.display = "none";
                                                        }

                                                    }
                                                }
                                                </script>
                          
                          <br>
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="example">
                              <thead>
                              <tr>
                                <th>Регион</th>
                                <th>Адрес филиала</th>
                                <th>Номер кассы</th>
                                <th>На начало дня</th>
                                <th>На текущий момент</th>
                               
                              </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td> Алмата  </td>
                                      <td>ул.Гоголя д.91</td>
                                      <td>Касса №2</td>
                                      <td>1 258 125</td>
                                      <td>1 845 211</td>
                                    <!--<td><span class="label label-success"><b>Пополнения</b></span></td> -->
                                  
                                    
                                  </tr>
                                  <tr>
                                      <td> Алмата  </td>
                                      <td>ул.Гоголя д.91</td>
                                      <td>Касса №2</td>
                                      <td>1 258 125</td>
                                      <td>1 845 211</td>
                                    <!--<td><span class="label label-success"><b>Пополнения</b></span></td> -->
                                  
                                    
                                  </tr>
                                  <tr>
                                      <td> Нур-сутан </td>
                                      <td>ул.Гоголя д.91</td>
                                      <td>Касса №2</td>
                                      <td>1 258 125</td>
                                      <td>1 845 211</td>
                                    <!--<td><span class="label label-success"><b>Пополнения</b></span></td> -->
                                  
                                    
                                  </tr>
                                 
                            
                              </tbody>
                            </table>
                          </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                        </div>
                        <!-- /.box-footer -->
                      </div>

              <div class="modal fade bd-example-modal-lg" id="modal-success">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header bg-green ">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title text-center "> <span class="glyphicon glyphicon-ok-circle"><b>&nbsp;Новая операция</b></span></h4>
                    </div>
                    <div class="modal-body">
                     <!-- Main content -->
                  
                                     <form method="POST"> <!--Выбор филиала-->
                                      <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="inputCity">Регион:</label>
                                           <select id="List1" class="form-control" name="region">
                                           <option selected value="Нур-Султан">Нур-султан</option>
                                            <option value="Актау">Актау</option>
                                            <option value="Актобе">Актобе</option>
                                            <option value="Алматы">Алматы</option>
                                            <option value="Атырау">Атырау</option>
                                            <option value="Караганда">Караганда</option>
                                            <option value="Кокшетау">Кокшетау</option>
                                            <option value="Костанай">Костанай</option>
                                            <option value="Павлодар">Павлодар</option>
                                            <option value="Семей">Семей</option>
                                            <option value="Талдыкорган">Талдыкорган</option>
                                            <option value="Тараз">Тараз</option>
                                            <option value="Шымкент">Шымкент</option>
                                          </select>
                                          
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputState">Филиал:</label>
                                          <select  id="List2" class="form-control"  name="branchAddress">
                                         
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputZip">Касса:</label>
                                          <select id="inputState" class="form-control" name="cashbox" >
                                            <option selected value="Касса 1">Касса 1</option>
                                            <option value="Касса 2">Касса 2</option>
                                            <option value="Касса 3">Касса 3</option>
                                            <option value="Касса 4">Касса 4</option>
                                            <option value="Касса 5">Касса 5</option>
                                          </select>
                                        </div>
                                      </div>
              
                                    </form><!--Выбор филиала-->


                                    <form> <!--Выбор операции и сумма -->
                                      <div class="form-row">

                                        <div class="form-group col-md-3">
                                          <label for="inputCity">Вид операции:</label>
                                           <select id="List1" class="form-control" name="operation">
                                            <option value="">Пополнение</option>
                                            <option value="">Изъятие</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputCity">Корреспондирующий счет:</label>
                                           <select id="List1" class="form-control" name="operation">
                                            <option value="">1255</option>
                                            <option value="">1251</option>
                                            <option value="">3350</option>
                                            <option value="">3388</option>
                                            <option value="">1272</option>
                                            <option value="">1030</option>

                                          </select>
                                        </div>
                                        </div>

                                        <div class="form-row">
                                          <div class="form-group col-md-3">
                                            <label for="inputCity">Сумма</label>
                                            <input type="text" class="form-control" name="amount" id="inputCity">
                                          </div>
                                          <div class="form-group col-md-5">
                                          <label for="inputCity">Кому</label>
                                          <input type="text" class="form-control" name="additionalInformation"id="inputCity" placeholder="Ф.И.О">
                                          </select>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label for="inputCity">Примечание</label>
                                            <input type="text" class="form-control" name="additionalInformation"id="inputCity">
                                          </div>
                                        </div>
                                        
                                    </form>

                                  <script type="text/javascript" src="linkedselect.js"></script>
                                  <script type="text/javascript">
                                  // Создаем новый объект связанных списков
                                  var syncList1 = new syncList;
                                  // Определяем значения подчиненных списков (2 и 3 селектов)
                                  syncList1.dataList = {
                                  /* Определяем элементы второго списка в зависимости
                                  от выбранного значения в первом списке */
                                  'Актау':{
                                      '11 мкрн дом3':'11 мкрн дом3'
                                  },
                                  'Актобе':{
                                      'Абулхаир Хана 84':'Абулхаир Хана 84',
                                      'Шернияза 51':'Шернияза 51'
                                      },
                                  'Алматы':{
                                    'Акан Сери 11':'Акан Сери 11',
                                    'Ауэзова 169':'Ауэзова 169',
                                    'Ауэзова 32':'Ауэзова 32',
                                    'Гоголя 91':'Гоголя 91',
                                    'Минина 24':'Минина 24',
                                    'Назарбаева 118':'Назарбаева 118',
                                    'Сатпаева 109':'Сатпаева 109',
                                    'Толе би 285':'Толе би 285'
                                  },
                                  'Нур-Султан':{
                                    'Абая 8':'Абая 8',
                                    'Абылай хана 6':'Абылай хана 6',
                                    'Абылайхана 32/2 (Встреча)':'Абылайхана 32/2 (Встреча)',
                                    'Бейбитшилик 47':'Бейбитшилик 47',
                                    'Кабанбай батыра, 2':'Кабанбай батыра, 2',
                                    'Кажымукана 22':'Кажымукана 22',
                                    'Кенесары 65':'Кенесары 65',
                                    'Сатпаева 23/1':'Сатпаева 23/1',
                                    'Сыганак 18':'Сыганак 18',
                                    'Тауелсыздык 45':'Тауелсыздык 45'
                                  },
                                    'Атырау':{
                                      'Сатпаева 32':'Сатпаева 32'
                                  },
                                  'Караганда':{
                                    'Абдирова 19':'Абдирова 19',
                                    'Майкудук 48':'Майкудук 48',
                                    'Шахтеров (Ермекова) 52':'Шахтеров (Ермекова) 52'
                                  },
                                  'Кокшетау':{
                                      'Абая 143':'Абая 143'
                                  },
                                  'Костанай':{
                                      'Абая 173':'Абая 173'
                                  },
                                  'Павлодар':{
                                      'Назарбаева 89':'Назарбаева 89'
                                  },
                                    'Семей':{
                                      'Дулатова 145':'Дулатова 145'
                                  },
                                      'Талдыкорган':{
                                      'Абая 254':'Абая 254'
                                  },
                                  'Тараз':{
                                      'Абая 170':'Абая 170',
                                      'Самал 14':'Самал 14'
                                  },
                                  'Шымкент':{
                                    'Байтурсынова 20':'Байтурсынова 20',
                                    'Иляева 5/4':'Иляева 5/4',
                                    'Назарбекова 11 (Нурсат)':'Назарбекова 11 (Нурсат)',
                                    'Рыскулова 24/1':'Рыскулова 24/1',
                                    'Рыскулова 84а':'Рыскулова 84а',
                                    'Север (Терискей 9)':'Север (Терискей 9)',
                                    'Уалиханова 192 (11 мкрн)':'Уалиханова 192 (11 мкрн)'
                                  }
                                  };
                                  // Включаем синхронизацию связанных списков
                                  syncList1.sync("List1","List2");
                                  </script>
                           
                                      <!----Поиск---> 
                                     <script> 
                                    function tableSearchzz() {
                                        var phrase = document.getElementById('search-text');
                                        var table = document.getElementById('example2');
                                        var regPhrase = new RegExp(phrase.value, 'i');
                                        
                                        var flag = false;
                                        for (var i = 1; i < table.rows.length; i++) {
                                            flag = false;
                                            for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                                                flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                                                if (flag) break;
                                            }
                                            if (flag) {
                                                table.rows[i].style.display = "";
                                            } else {
                                                table.rows[i].style.display = "none";
                                            }
    
                                        }
                                    }
                                    </script><!----Поиск--->

                             <div class="input-group center">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"> <i class="glyphicon glyphicon-remove"></i>&nbsp;Закрыть</button>
                        <button type="button" href="blanks/rko.php" class="btn btn-success pull-left"> <i class="fa fa-save"></i>&nbsp;Подтвердить</button>
                        <a type="button" href="blanks/rko.php" class="btn btn-info pull-left"> <i class="fa fa-print"></i>&nbsp;Распечатать</a>
                    </div>
                    
                  </div>
                  <!-- /.modal-content -->
                 
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
              
 </section>
    </div>
    </div>
  <?php require "blocks/footer.php"?> 
    


  