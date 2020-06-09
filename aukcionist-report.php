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
        <section class="content-header no-print">
                  <h1>
                    Отчетные формы - Аукционист
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li><a href="#">Отчеты</a></li>
                    <li class="active">Отчетные формы - Аукционист</li>
                  </ol>
        </section>
                  <div class="col-md-12">
                      <div class="box no-print">
                          <!--<div class="box-header">
                            <h3 class="box-title"></h3>
                          </div> /.box-header -->
                          <div class="box-body no-print">
                              <form class="no-print">
                                <p>
                                  <b>Регион:</b>&nbsp;
                                <select id="List1" name="region">
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
                                </p>
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
                                <form>
                                  <li>
                                    <span class="glyphicon-class"><b>Остатки залогового имущества на ...</b></span>
                                    </li>
                                    <p> <span class="glyphicon glyphicon-list-alt"></span>
                                  <input type="date" name="calendar" value="2020-01-01"
                                   max="2020-05-01" min="2012-01-01">
                                   <a href="#" class="btn bg-purple margin" data-toggle="modal" data-target="#myModal">Сформировать отчет</a> </p> 
                                 </form>
            
                                 <form>
                                  <li>
                                    <span class="glyphicon-class"><b>Инвентаризационная  ведомость на ...</b></span>
                                    </li>
                                    <p> <span class="glyphicon glyphicon-list-alt"></span>
                                  <input type="date" name="calendar" value="2020-01-01"
                                   max="2020-05-01" min="2012-01-01">	&nbsp;
                                   <a href="invent_opis.html" target="_blank" class="btn btn-primary active" role="button" aria-pressed="true"> Сформировать отчет</a></p>
                                 </form>
            </div> <!-- /.box-->
          </div>
              <div class="box box-primary collapsed-box">
                <div class="box-header with-border">
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool no-print" data-widget = "collapse"> <i class = "fa fa-minus"> </i> </button>
                  </div> <!-- /.box-tools -->
                  <h3 class="box-title no-print">Остатки залогового имущества- Аукционист</h3>
                  </div> <!-- /.box-header -->
                <div class = "box-body">
                  <h3 class="text-center" >Остатки залогового имущества- Аукционист</h3>
                      <p class="text-center">на 16 апреля  2020 г.</p>
                      <p class="font-weight-bold"> Пункт №1.г.Нур-Султан, пр-т Абая 8, помещение 105 т/д (2 касса) </p>
                  
                  <section>
                      <table id="example2" class="table table-bordered table-hover">
                          <tr class="active">
                              <th class="text-center">№</th>
                              <th class="text-center">Номер ЗБ</th>
                              <th class="text-center">Наимаенование залогового имущества</th>
                              <th class="text-center">Дата передачи на реализацию</th>
                              <th class="text-center">Эксперт-оценщик</th>
                              <th class="text-center">Сумма</br> кредита</th>
                              <th class="text-center">Цена к реализации</th>
                          </tr>
                          <tr>
                              <th class="text-center">1</th><th class="text-center">2</th>
                              <th class="text-center">3</th><th class="text-center">4</th>
                              <th class="text-center">5</th><th class="text-center">6</th>
                              <th class="text-center">7</th>
                          </tr>
                          <tr><th colspan="7"class="text-center">Техника</th></tr>
                          <tr><th colspan="7"class="text-center">Сотовый телефон</th></tr>
                          <tr>
                              <td>1</td>
                              <td>100001</td>
                              <td>iPhone XS max 256 gb, Б/У. Есть повреждения, 
                                  меликие сколы по корпусу. По бокам, имеются щели
                                  вдоль экарна. IMEI: 357266098287499
                              </td>
                              <td>26.04.2020</td>
                              <td>Жандарбеков Ж.Ж.</td>
                              <td>200 000</td>
                              <td>250 000</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>100002</td>
                              <td>Huawei P20 lite 64 gb, Б/У. Есть повреждения, 
                                  меликие сколы по корпусу. Есть царапины на экране IMEI: 865116098287499
                              </td>
                              <td>26.04.2020</td>
                              <td>Жандарбеков Ж.Ж.</td>
                              <td>25 000</td>
                              <td>30 000</td>
                          </tr>
                          <tr class="warning">
                              <th colspan="5">ИТОГО по "Сотовый телефон"</th>
                              <th>225 000</th>
                              <th>280 000</th>
                          </tr>
                          <tr><th colspan="7" class="text-center">Игровая приставка</th></tr>
                          <tr>
                              <td>3</td>
                              <td rowspan="4">100003</td>
                              <td>Sony PS4 slim 500 gb Б/У, есть повреждения 
                                  царапины и потертости по копусу. Шум и нагреввание.
                                  S/N:03-27452231-6332334
                              </td>
                              <td>12.04.2020</td>
                              <td>Жандарбеков Ж.Ж.</td>
                              <td>20 000</td>
                              <td>70 000</td>
                              
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>Коробка от Игровой приставки
                                  PlayStation classic 500 gb Б/У есть повреждения.</td>
                              <td>27.04.2020</td>
                              <td>Жандарбеков Ж.Ж.</td>
                              <td></td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>
                                  DualShok 4 от PS 4 
                                  Б/У есть повреждения. 
                                  S/N: 1351651321615565
                              </td>
                              <td>12.04.2020</td>
                              <td>Жандарбеков Ж.Ж.</td>
                              <td></td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td>
                                  HDMI от PS4.Б/У есть повреждения. 
                              </td>
                              <td>12.04.2020</td>
                              <td>Жандарбеков Ж.Ж.</td>
                              <td></td>
                               <td></td>
                          </tr>
                          <tr>
                              <td>7</td>
                              <td rowspan="2">100004</td>
                              <td>Sony PS4 slim 500 gb Б/У, есть повреждения 
                                  царапины и потертости по копусу. Корпус в краске .
                                  S/N:86-244444-565132
                              </td>
                              <td>12.04.2020</td>
                              <td>Жандарбеков Ж.Ж.</td>
                              <td>15 000</td>
                              <td>55 000</td>
                          </tr>
                      
                          <tr>
                              <td>8</td>
                              <td>
                                  DualShok 4 от PS 4 
                                  Б/У есть повреждения.
                                  Есть трещина на корпусе. 
                                  S/N: 5545555115555
                              </td>
                              <td>12.04.2020</td>
                             <td>Жандарбеков Ж.Ж.</td>
                              <td></td>
                              <td></td>
                          </tr>
                       
                          <tr class="warning">
                              <th colspan="5">ИТОГО по "Игровая приставка"</th>
                              <th>35 000</th>
                              <th>125 000</th>
                          </tr>
                      <tr class="info">
                              <th colspan="5">ИТОГО по  "Техника"</th>
                              <th>260 000</th>
                              <th>405 000</th>
                          </tr>
                          <tr>
                        <th class="text-center" colspan="7" >Меховые издения</th>
                      </tr>
                       <tr>
                         <th class="text-center" colspan="7" >Шуба</th>
                       </tr>
                       <tr>
                              <td>10</td>
                              <td>100005</td>
                              <td>
                                  Шуба норка поперечка, модель IVIRIS,
                                  цвет коричневый, рукова трансформер, стойка воротник, длина 90,
                                  размер 48, есть этикетка Б/У.
                              </td>
                              <td>12.04.2020</td>
                             <td>Жандарбеков Ж.Ж.</td>
                              <td>100 000 </td>
                              <td>150 000 </td>
                          </tr>
                  
                      <tr class="warning">
                              <th colspan="5">ИТОГО по "Шуба"</th>
                              <th>100 000</th>
                              <th>150 000</th>
                          </tr>
                  
                      <tr class="info">
                              <th colspan="5">ИТОГО по  "Меховые издения"</th>
                              <th>100 000</th>
                              <th>150 000</th>
                          </tr>
                      <tr>
                        <th class="text-center" colspan="7" >Прочее имущество</th>
                      </tr>
                      <tr>
                         <th class="text-center" colspan="7" >Стиральная машина</th>
                      </tr>
                      <tr>
                              <td>10</td>
                              <td>100006</td>
                              <td>
                                  Стиральная машина Samsung Eco buble 7 kg, есть повреждения. Б\У.
                              </td>
                              <td>05.04.2020</td>
                             <td>Жандарбеков Ж.Ж.</td>
                              <td>35 000 </td>
                              <td>45 000 </td>
                      </tr>
                      <tr class="warning">
                              <th colspan="5">ИТОГО по "Стиральная машина"</th>
                              <th>35 000</th>
                              <th>45 000</th>
                          </tr>
                      <tr class="info">
                              <th colspan="5">ИТОГО по  "Прочее имущество"</th>
                              <th>35 000</th>
                              <th>45 000</th>
                          </tr>
                          <tr class="danger">
                              <th colspan="5">ИТОГО по всему залоговому имуществу</th>
                              <th>395 000</th>
                              <th>600 000</th>
                          </tr>
                      </table>
                      <br>
                      <p class="text-right">Исполнитель______________/Ф.И.О Жандарбеков Ж.Ж./</p>
                      <section class="no-print">
                        <a onclick="print()"class="btn bg-navy"><i class="fa fa-print"></i> Распечатать</a>
                      </section>
                    </div>
                    
                  </div>
<!--============================================================================================================================================================-->
                    <div class="box box-primary collapsed-box">
                      <div class="box-header with-border">
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool no-print" data-widget = "collapse"> <i class = "fa fa-minus"> </i> </button>
                        </div> <!-- /.box-tools -->
                        <h3 class="box-title no-print">ИНВЕНТАРИЗАЦИОНАЯ ОПИСЬ ТОВАРОВ</h3>
                        </div> <!-- /.box-header -->
                      <div class = "box-body">
                      
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th rowspan="2" class="nomer">№ </th>
                                <th rowspan="2" class="nameProperty">Наименование залогового имущества</th>
                                <th rowspan="2" class="Score">Счет</th>
                                <th rowspan="2" class="ItemNumber">Номенклатурный номер</th>
                                <th rowspan="2" class="unitOfMeasurement">Единица измерения</th>
                                <th rowspan="2" class="price">Цена за единицу, в KZT (оценочная)</th>
                                <th class="quantity">Фактическое наличие</th>
                                <th class="quantity">По данным бухгалтерского учета</th>
                            </tr>
                            <tr>
                                <th class="quantity">Кол-во</th>
                                <th class="quantity">Кол-во</th>
                            </tr>
                            <tr>
                                <th class="nomer">1</th>
                                <th class="quantity">2</th>
                                <th class="quantity">3</th>
                                <th class="quantity">4</th>
                                <th class="quantity">5</th>
                                <th class="quantity">6</th>
                                <th class="quantity">7</th>
                                <th class="quantity">8</th>
                            </tr>
                            <tr>
                                <th class="view"colspan="8">Техника</th>
                            </tr>
                            <tr>
                                <th class="type"colspan="8">Сотовый телефон</th>
                            </tr>
                            <tr>
                                <td class="nomer1">1</td>
                                <td class="description1">Samsung A7 2018, цвет розовый. Imei:352699105718657 В коробке, с грантийным талоном, в комплекте зарядное устройство. По корпусу есть сколы и царапины. В чехле. Б/У. Есть повреждения.</td>
                                <td class="score1">X02</td>
                                <td class="itemNumber1" rowspan="2">1015121</td>
                                <td class="unitOfMeasurement1">штука</td>
                                <th class="price1">25 000</th>
                                <td class="quantity1">1</td>
                                <td class="quantity1">1</td>
                            </tr>
                            <tr>
                                <td class="nomer1">2</td>
                                <td class="description1">
                                    Коробка от Samsung A7 2018 года
                                </td>
                                <td class="score1">X02</td>
                            
                                <td class="unitOfMeasurement1">штука</td>
                                <th class="price1">10</th>
                                <td class="quantity1">1</td>
                                <td class="quantity1">1</td>
                            </tr>
                            <tr>
                                <td class="nomer1">3</td>
                                <td class="description1">iPhone XS max , цвет черный. Imei:352699105718657 В коробке, с грантийным талоном, в комплекте зарядное устройство. По корпусу есть сколы и царапины. В чехле. Б/У. Есть повреждения.</td>
                                <td class="score1">X02</td>
                                <td class="itemNumber1">1015350</td>
                                <td class="unitOfMeasurement1">штука</td>
                                <th class="price1">200 000</th>
                                <td class="quantity1">1</td>
                                <td class="quantity1">1</td>
                            </tr>
                            <tr>
                                <td class="total" colspan="5">ИТОГО по "Сотовый телефон"</td>
                                <th class="totalPrice">225 010</th>
                                <th class="quantity">3</th>
                                <th class="quantity">3</th>
                            </tr>
                            <tr>
                                <th class="type"colspan="8">Фотоаппарат</th>
                            </tr>
                            <tr>
                                <td class="nomer1">4</td>
                                <td class="description1">Сanon 1100D 
                                    В коробке, с грантийным талоном,
                                 в комплекте зарядное устройство. 
                                 По корпусу есть сколы и царапины.
                                В чехле. Б/У. Есть повреждения.
                            SN|46541313</td>
                                <td class="score1">X02</td>
                                <td class="itemNumber1">1015350</td>
                                <td class="unitOfMeasurement1">штука</td>
                                <th class="price1">20 000</th>
                                <td class="quantity1">1</td>
                                <td class="quantity1">1</td>
                            </tr>
                            <tr>
                                <td class="total" colspan="5">ИТОГО по "Фотоаппарат"</td>
                                <th class="totalPrice">225 010</th>
                                <th class="quantity">3</th>
                                <th class="quantity">3</th>
                            </tr>
                            <tr class="Grandtotal">
                                <td class="total" colspan="5">ИТОГО по "Техника"</td>
                                <th class="totalPrice">225 010</th>
                                <th class="quantity">3</th>
                                <th class="quantity">3</th>
                            </tr>
                        </table>
                        <br>
                        <section class="no-print">
                          <a href="invent_opis.html" target="_blank" class="btn btn-primary active" role="button" aria-pressed="true"> <i class="fa fa-print"></i>  Распечатать</a></p>
                        </section>


                  </div>
                </div>
                
                  
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->


   </div> <!---row--> 

   </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
   <?php require "blocks/footer.php"?> 

