
     
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
      
     <section class="content-header">
        
         <div class="сontainer">
            
               <div class="row">
                 <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                          
                          <form>
                            <fieldset>
                             <p>
                                     <b>Регион:</b>&nbsp;
                                            <select id="List1" name="region">
                                            <option value="">Все филиалы</option>
                                            <option value="Актау">Актау</option>
                                            <option value="Актобе">Актобе</option>
                                            <option value="Алматы">Алматы</option>
                                            <option value="Астана">Астана</option>
                                            <option value="Атырау">Атырау</option>
                                            <option value="Караганда">Караганда</option>
                                            <option value="Кокшетау">Кокшетау</option>
                                            <option value="Костанай">Костанай</option>
                                            <option value="Павлодар">Павлодар</option>
                                            <option value="Семей">Семей</option>
                                            <option value="Талдыкорган">Талдыкорган</option>
                                            <option value="Тараз">Тараз</option>
                                            <option value="Шымкент">Шымкент</option>
                    
                                          </select>&nbsp;&nbsp;
                               <b>Филиал:</b>&nbsp;
                                            <select  id="List2" name="adress"></select> &nbsp;&nbsp;
                    
                    
                                        <b>Касса:</b>&nbsp;<select  name="kassa" >
                                            <option value="Все кассы">Все кассы</option>
                                            <option value="Касса 1">Касса 1</option>
                                            <option value="Касса 2">Касса 2</option>
                                            <option value="Касса 3">Касса 3</option>
                                            <option value="Касса 4">Касса 4</option>
                                            <option value="Касса 5">Касса 5</option>
                    
                                          </select>
                    
                                          &nbsp;&nbsp;<button class="btn  btn-warning">Сформировать</button>
                               </p>
                            </fieldset>
                           </form>

                          <script type="text/javascript" src="linkedselect.js"></script>
                         </div><!-- /.box-header -->
                        <div class="box-body">
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

                            'Астана':{
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
                    
                      </div><!--.box-body -->
                          </div> <!--.box -->
                        </div> <!--.col-md-12 -->
    





        <!--------------------------------------------------------------------------->


                      <div class="col-md-12">
                        <div class="box box-danger">    
                          <div class="box-header">
                            <h3 class="box-title">Список товара на ремонте</h3>
                            <div class="box-tools">
                              <div class="input-group" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" id="search-text" placeholder="Поиск" onkeyup="tableSearch()">
                                <div class="input-group-btn">
                                  <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                            </div>
                          </div><!-- /.box-header -->
                          <div class="box-body no-padding">
                                  <!-- search form -->
                                <!---  <form action="#" method="get" class="sidebar-form">
                                    <div class="input-group">
                                      <input class="form-control" type="text" placeholder="Мне повезет!" id="search-text" onkeyup="tableSearchz()">
                                      <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
                                  </form>-->
                                  <script>
                                    function tableSearch() {
                                        var phrase = document.getElementById('search-text');
                                        var table = document.getElementById('info-table');
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
                                  <!-- /.search form -->
                            <table class="table table-hover table-bordered" id="info-table">
                              <thead>
                              <tr class="success">
                               
                                <th style="width: 5rem">№</th>
                                <th style="width: 5rem">№ЗБ</th>
                                <th class="text-center" style="width: 40rem">Описание имущества</th>
                                <th style="width: 15rem">Дата поступления на ремонт</th>
                                <th style="width: 15rem">Вид поломки</th>
                                <th style="width: 10rem">Статус</th>
                              </tr>
                            </thead>
                              <tbody>
                                <tr >
                                  <td>1</td>
                                  <td>3105015</td>
                                  <td>Телефон Samsung A50 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                  <td>19.05.2020</td>
                                  <td> Samsung account </td>
                                  <td>  <div class="form-group">
                                    <select>
                                    <option value="queue">В очереди</option>
                                    <option value="process">В процессе</option>
                                    <option value="performed">Выполнено</option>
                                    <option value="Алматы">Не пригоден для ремонта</option>
                                  </select>
                                  </div> 
                                  <button type="submit" name="search" id="search-btn" class="btn btn-success"><i class="fa fa-cogs"></i> Подтвердить</button>
                                  <button type="submit" name="search" id="search-btn" class="btn btn-danger" alt="Выставить на витрину"><i class="fa fa-university"></i> </button>
                                </td>
                                </tr>
                                <tr >
                                  <td>2</td>
                                  <td>1102254</td>
                                  <td>Телефон Samsung Note10 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                  <td>19.05.2020</td>
                                  <td> Разбит экран </td>
                                  <td>  <div class="form-group">
                                    <select>
                                    <option value="queue">В очереди</option>
                                    <option value="process">В процессе</option>
                                    <option value="performed">Выполнено</option>
                                    <option value="NotSuitableForRepair">Не пригоден для ремонта</option>
                                  </select>
                                  </div> 
                                  <button type="submit" name="search" id="search-btn" class="btn btn-success"><i class="fa fa-cogs"></i> Подтвердить</button>
                                  <button type="submit" name="search" id="search-btn" class="btn btn-danger" alt="Выставить на витрину"><i class="fa fa-university"></i> </button>
                                </td>
                                </tr>
                                
                               
                              </tbody>
                              <tfoot>
                                <tr class="danger">
                                  <th colspan="4" class="text-center">Итого на ремонте находится </th>
                                  
                                  <th>2</th>
                                  <th></th>
                                </tr>
                              </tfoot>
                            </table>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div><!-- /.col-md-6 -->
                   </div><!-- /.col -->

                            
                </div><!-- /.row -->
     </section>
     </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
     <?php require "blocks/footer.php"?> 
         
    