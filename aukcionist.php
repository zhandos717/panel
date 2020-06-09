
   <?php require "blocks/header.php"?><!-- Content Wrapper. Contains page content -->
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
       
                    <!-- Main content -->
        <section class="content">    
                                  
                            <div class="box box-solid box-primary no-print">    <!--box box-solid box-primary-->                                 
                                                                                                                   
                                   <form class="control-sidebar-black">
                                
                                 <b>&nbsp;Регион:</b>&nbsp; 
                                   
                                  <select id="List1" name="region">
                                  <option value="Нур-Султан">Нур-султан</option>
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
                                  </select>&nbsp;&nbsp;
                                  <b>Филиал:</b>&nbsp;
                                  <select  id="List2" name="adress"></select> &nbsp;&nbsp;
                                  <b>Касса:</b>&nbsp;<select  name="kassa" >
                                  <option value="Касса 1">Касса 1</option>
                                  <option value="Касса 2">Касса 2</option>
                                  <option value="Касса 3">Касса 3</option>
                                  <option value="Касса 4">Касса 4</option>
                                  <option value="Касса 5">Касса 5</option>
                                
                                  </select>
                               <button class="btn bg-primary margin"><font style="vertical-align: inherit;">
                                 <font style="vertical-align: inherit;"> Сформировать</font></font></button>
                                  
                                </form>
                                   
                               <!-- <button type="submit" class="btn btn-info pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">войти в систему</font></font></button> -->
                                
                                
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
                              </div> <!--box box-solid box-primary-->     
              
   
                                <div class="box box-info">
                                
                                
                                <div class="box-header with-border">
                                  <h3 class="box-title">Кассовые операции</h3>
                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool no-print" data-widget="collapse"><i class="fa fa-minus no-print"></i>
                                    </button>
                                    <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                                  </div>
                                </div>
                                <div class="box-body">
                                  <div class="input-group" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right no-print" placeholder="Search">
                                    <div class="input-group-btn no-print">
                                      <button class="btn btn-sm btn-default"><i class="fa fa-search no-print"></i></button>
                                    </div>
                                  </div>
                                  <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                      <thead>
                              <thead>       
                          <tr>
                              <th class="text-center"> №</th>
                              <th class="text-center">№ ЗБ</th>
                              <th class="text-center">Клиент</th>
                              <th class="text-center">Телефон</th>
                              <th  class="text-center">Наименование залогового имущества</th>
                              <th  class="text-center">Сумма кредита</th>
                              <th class="no-print"> Действие</th>
                            
                          </tr>

                          <tr>
                              <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th>
                          </tr>
                          </thead>
                          <thbody>
                        
                          <tr><th colspan="6" class="text-center" >Техника</th></tr>
                          <tr>
                              <td>1</td>
                              <td rowspan="3">22039842</td>
                              <td rowspan="3">Жансугуров Жанболат Талгатович</td>
                              <td rowspan="3">+7 747 199 60 21</td>
                              <td>iPhone XS max 256 gb, Б/У. Есть повреждения, 
                                  меликие сколы по корпусу. По бокам, имеются щели
                                  вдоль экарна. IMEI: 357266098287499
                              </td>
                              <td>200 000</td>
                              <td class="no-print"> <div class="btn-group no-print">
                                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button> 
                                            <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span></button>
                                          </div>
                                          </td>
                              
                          </tr>
                          <tr>
                              <td>2</td>
                            
                              <td>Коробка от iPhone Xs max
                              </td>
                              <td>0</td>
                              <td class="no-print"><div class="btn-group no-print">
                                          <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button> 
                                            <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span></button>
                                          </div> </td>
                          </tr>
                          <tr>
                              <td>3</td>
                            
                              <td>Зарядное устройсто от iPhone Xs max
                              </td>
                              <td>0</td>
                              <td class="no-print"><div class="btn-group no-print">
                                          <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button> 
                                            <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span></button>
                                          </div> </td>
                          </tr>

                          <tr class="info">
                              <th colspan="5">ИТОГО по "Техника"</th>
                              <th>200 000</th>
                          </tr>
                          <tr><th colspan="6" >Меховые изделия</th></tr>
                          <tr>
                              <td >4</td>
                              <td  rowspan="2">22030214</td>
                              <td rowspan="2">Жансугуров Жанболат Талгатович</td>
                              <td rowspan="2">+7 747 199 60 21</td>
                              <td >Шуба Норка Автоледи. Цвет:Коричневый. Р-Р 38-40.
                                  Длина: 70 см, без капюшона, без пояса. Есть потертости. Б/У. Есть повреждения.
                              </td>
                              <td >50 000</td>
                              <td class="no-print"><div class="btn-group no-print">
                                          <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button> 
                                            <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span></button>
                                          </div> </td>
                          </tr>
                          <tr>
                              <td >5</td>
                              
                              <td>Чехол от шубы
                              </td>
                              <td>50</td>
                              <td class="no-print"><div class="btn-group no-print">
                                          <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button> 
                                            <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span></button>
                                          </div> </td>
                          </tr>
                          <tr class="info">
                              <th colspan="5">ИТОГО по "Меховые изделия"</th>
                              <th>50 050</th>
                              
                          </tr>
                          <tr><th colspan="6" class="text-center" >Прочее имущество</th></tr>
                          <tr>
                              <td >6</td>
                              <td>22030214</td>
                            
                              <td>Жансугуров Жанболат Талгатович</td>
                              <td>+7 747 199 60 21</td>
                              <td> Стиральная машинка Beko 6 kg, модель: WH-6100; Есть повреждения,
                                  без коробки, без документов, без комплектации </td>
                              <td>10 000</td>
                              <td class="no-print"><div class="btn-group no-print">
                                          <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button> 
                                            <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span></button>
                                          </div> </td>
                          </tr>

                          <tr class="warning">
                              <th colspan="5">ИТОГО по "Прочее имущество"</th>
                              <th>10 000</th>
                          </tr>



                          <tr class="danger">
                              <th colspan="5"  >ИТОГО по всем видам залогового имущества</th>
                              <th >260 050</th>
                          </tr>
                              </thbody>
                                    </table>
                                  </div><!-- /.box-body -->
                                </div><!-- /.box -->
           

              
          </section><!--content-->
          </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
          <?php require "blocks/footer.php"?> 
         <!---row--> 

