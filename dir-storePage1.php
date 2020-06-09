
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
                 <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">

                          <form >
                            <fieldset>
                             <p>
                                     <b>Регион:</b>&nbsp;
                                        <select id="List1" class="form-control select1" style="width: 10%; display: inline;" name="region">
                                          <option value=""></option>
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
                                          <option value="Уральск">Уральск</option>

                                        </select>&nbsp;&nbsp;


                                        <b>Филиал:</b>&nbsp;
                                        <select id="List2" class="form-control select3" style="width: 10%; display: inline;" name="adress"></select> &nbsp;&nbsp;


                                        <b>Касса:</b>&nbsp;<select class="form-control select3" style="width: 10%; display: inline;" name="kassa">
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
                        <div class = "box box-success collapsed-box">
                          <div class="box-header with-border">
                            <h3 class="box-title pull-left">Товар на складе &ensp;</h3>
                            <div class="box-tools pull-right">
                              <button class = "btn btn-box-tool" data-widget = "collapse"> <i class = "fa fa-plus"> </i> </button>
                            </div>
                            <div class="input-group pull-left" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control input-sm pull-right" id="search-text" placeholder="Поиск..." onkeyup="tableSearchz()">
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div><!-- /.box-header -->
                          <div class="box-body no-padding">
                                  <script>
                                    function tableSearchz() {
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
                            <table class="table table-hover table-border" id="info-table">
                              <thead>
                              <tr class="success">
                                <th style="width: 5rem" class="text-center">№</th>
                                <th style="width: 5rem">№ЗБ</th>
                                <th style="width: 5rem"> Дата поступления</th>
                                <th class="text-center">Описание имущества</th>
                                <th style="width: 10rem">Сумма кредита</th>
                                <th style="width: 10rem">Сумма продажи</th>
                                <th></th>


                              </tr>
                            </thead>
                              <tbody>
                                <tr >
                                  <td class="text-center">1</td>
                                  <td>3105015</td>
                                  <td>19.05.2020</td>
                                  <td>Телефон Samsung A50 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                  <td>40 000</td>
                                  <td>55 000 </td>
                                  <td>  <button type="submit" name="search" id="search-btn" class="btn btn-success fa fa-shopping-cart" alt="Выставить на витрину"></button>
                                    <button type="submit" name="search" id="search-btn" class="btn btn-warning fa fa-wrench"></button></td>
                                </tr>
                                <tr >
                                  <td class="text-center">2</td>
                                  <td>3105015</td>
                                  <td>10.05.2020</td>
                                  <td>Телефон Samsung A51 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                  <td>40 000</td>
                                  <td>55 000 </td>
                                  <td>  <button type="submit" name="search" id="search-btn" class="btn btn-success fa fa-shopping-cart" alt="Выставить на витрину"></button>
                                    <button type="submit" name="search" id="search-btn" class="btn btn-warning fa fa-wrench"></button> </td>
                                </tr>
                                <tr >
                                  <td class="text-center">3</td>
                                  <td>3105015</td>
                                  <td>12.05.2020</td>
                                  <td>Телефон Samsung A30 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                  <td>40 000</td>
                                  <td>55 000 </td>
                                  <td>  <button type="submit" name="search" id="search-btn" class="btn btn-success fa fa-shopping-cart" alt="Выставить на витрину"></button>
                                    <button type="submit" name="search" id="search-btn" class="btn btn-warning fa fa-wrench"></button></td>

                                </tr>

                              </tbody>
                              <tfoot>
                                <tr class="danger">
                                  <th colspan="4" class="text-center">Итого </th>
                                  <th>120 000</th>
                                  <th>165 000</th>
                                  <th></th>

                                </tr>
                              </tfoot>
                            </table>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                      </div><!-- /.col-md-6 -->

  <!--------------------------------------------------------------------------->



                        <div class="col-md-12">
                          <div class="box box-warning collapsed-box">
                            <div class="box-header">
                              <h3 class="box-title pull-left">Товар на витрине&ensp;</h3>
                              <div class="input-group" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" id="input" placeholder="Поиск" onkeyup="tableSearchzz()">
                                <div class="input-group-btn">
                                  <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                              <div class="box-tools">

                              </div>
                              <div class="box-tools pull-right">
                                <button class = "btn btn-box-tool" data-widget = "collapse"> <i class = "fa fa-plus"> </i> </button>
                              </div>
                            </div><!-- /.box-header -->
                             <!-- search form -->
                             <div class="box-body no-padding">
                              <!-- search form -->

                              <script>
                                function tableSearchzz() {
                                    var phrase = document.getElementById('input');
                                    var table = document.getElementById('info-tablee');
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
                                  <table class="table table-hover" id="info-tablee">
                                    <thead>
                                    <tr class="success">
                                      <th style="width: 5rem" class="text-center">№</th>
                                      <th style="width: 5rem">№ЗБ</th>
                                      <th>Дата поступления на продажу</th>
                                      <th>Дата выставления на витрину</th>
                                      <th class="text-center">Описание имущества</th>
                                      <th style="width: 5rem">Сумма кредита</th>
                                      <th style="width: 5rem">Сумма продажи</th>
                                      <th></th>
                                    </tr>
                                  </thead>
                                    <tbody>
                                      <tr>
                                        <td class="text-center">1</td>
                                        <td>3105015</td>
                                        <td>12.02.2020</td>
                                        <td>13.05.2020</td>
                                        <td>Телефон Samsung A47 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                        <td>40 000</td>
                                        <td>55 000 </td>
                                        <td>  <button type="submit" name="search" id="search-btn" class="btn btn-danger" alt="Выставить на витрину"><i class="fa fa-university"></i> </button> </td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">2</td>
                                        <td>3105015</td>
                                        <td>12.02.2020</td>
                                        <td>13.05.2020</td>
                                        <td>Телефон Samsung A25 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                        <td>40 000</td>
                                        <td>55 000 </td>
                                        <td>  <button type="submit" name="search" id="search-btn" class="btn btn-danger" alt="Выставить на витрину"><i class="fa fa-university"></i> </button> </td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">3</td>
                                        <td>3105015</td>
                                        <td>12.02.2020</td>
                                        <td>13.05.2020</td>
                                        <td>Телефон Samsung A90 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                        <td>40 000</td>
                                        <td>55 000 </td>
                                        <td>  <button type="submit" name="search" id="search-btn" class="btn btn-danger" alt="Выставить на витрину"><i class="fa fa-university"></i> </button> </td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">4</td>
                                        <td>3105015</td>
                                        <td>12.02.2020</td>
                                        <td>13.05.2020</td>
                                        <td>Телефон Samsung A78 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                        <td>40 000</td>
                                        <td>55 000 </td>
                                        <td>  <button type="submit" name="search" id="search-btn" class="btn btn-danger" alt="Выставить на витрину"><i class="fa fa-university"></i> </button> </td>
                                      </tr>

                                    </tbody>
                                    <tfoot>
                                      <tr class="danger">
                                        <th colspan="5" class="text-center warning">Итого </th>
                                        <th>400 000</th>
                                        <th>550 000</th>
                                        <th></th>
                                      </tr>
                                    </tfoot>
                                  </table>
                            </div><!-- /.box-body -->
                          </div><!-- /.box -->
                        </div><!-- /.col-md-12 -->
  <!--------------------------------------------------------------------------->
                                  <div class="col-md-12">
                                    <div class = "box box-danger collapsed-box">
                                      <div class="box-header with-border">
                                        <h3 class="box-title pull-left">Товар на ремонте &ensp;</h3>
                                        <div class="box-tools pull-right">
                                          <button class = "btn btn-box-tool" data-widget = "collapse"> <i class = "fa fa-plus"> </i> </button>
                                        </div>
                                        <div class="input-group pull-left" style="width: 150px;">
                                          <input type="text" name="table_search" class="form-control input-sm pull-right" id="inputz" placeholder="Поиск" onkeyup="tableSearchza()">

                                              <!-- /.search form -->
                                          <div class="input-group-btn">
                                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                          </div>
                                        </div>
                                      </div><!-- /.box-header -->
                                      <div class="box-body no-padding">
                                      <script>
                                                function tableSearchza() {
                                                    var phrase = document.getElementById('inputz');
                                                    var table = document.getElementById('example1');
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

                                        <table class="table table-hover table-border" id="example1">
                                          <thead>
                                          <tr class="success">
                                            <th style="width: 5rem" class="text-center">№</th>
                                            <th style="width: 5rem">№ЗБ</th>
                                            <th style="width: 5rem"> Дата поступления</th>
                                            <th style="width: 15rem"> Дата передачи на ремонт</th>
                                            <th class="text-center">Описание имущества</th>
                                            <th style="width: 10rem">Вид ремонта</th>
                                            <th class="warning"> Статус</th>


                                          </tr>
                                        </thead>
                                          <tbody>
                                            <tr >
                                              <td class="text-center">1</td>
                                              <td>3105015</td>
                                              <td>19.05.2020</td>
                                              <td>20.05.2020</td>
                                              <td>Телефон Samsung A50 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                                 <td>Не включается</td>

                                              <td class="warning"><span class="label label-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Не пригоден для ремонта</font></font></span>
                                              </td>
                                            </tr>
                                            <tr >
                                              <td class="text-center">2</td>
                                              <td>3105015</td>
                                              <td>10.05.2020</td>
                                              <td>20.05.2020</td>
                                              <td>Телефон Samsung A51 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                              <td>Замена батареи</td>

                                              <td class="warning"><span class="label label-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">В процессе</font></font></span>
                                              </td>
                                            </tr>
                                            <tr >
                                              <td class="text-center">3</td>
                                              <td>3105015</td>
                                              <td>12.05.2020</td>
                                              <td>20.05.2020</td>
                                              <td>Телефон Samsung A30 imei:351313513133, без коробки, без документов, без комплектации, есть сколы и царапины по корпусу.</td>
                                              <td>Samsung Account</td>
                                              <td class="warning"><span class="label label-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Выполнено</font></font></span>
                                              </td>

                                            </tr>

                                          </tbody>
                                          <tfoot>
                                            <tr class="danger">
                                              <th colspan="6" class="text-center">Итого </th>
                                              <th>3 шт.</th>

                                              <th class="warning"></th>
                                              <th class="warning"></th>
                                            </tr>
                                          </tfoot>
                                        </table>
                                      </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                  </div><!-- /.col-md-12 -->

<!--------------------------------------------------------------------------->


                </div><!-- /.content-wrapper -->
           </section>
           </div>
<?php require "blocks/footer.php"?>
