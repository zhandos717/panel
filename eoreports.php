
   <?php require "blocks/header.php"?><!-- Content Wrapper. Contains page content -->
   <script type="text/javascript" src="linkedselect.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Отчетные формы Эксперта оценщика
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
          <li><a href="index.php">Регионы</a></li>
          <li class="active">Филиалы</li>
        </ol>
      </section>



      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
              </div><!-- /.box-header -->
              <div class="box-body">

                <script type="text/javascript" src="linkedselect.js"></script>

                <b>Регион:</b>&nbsp;
                <select id="List1" class="form-control select1" style="width: 10%; display: inline;" name="regionlombard">
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
                <select id="List2" class="form-control select3" style="width: 10%; display: inline;" name="adresslombard"></select> &nbsp;&nbsp;


                <b>Касса:</b>&nbsp;<select class="form-control select3" style="width: 10%; display: inline;" name="kassa">
                  <option value="Все кассы">Все кассы</option>
                  <option value="Касса 1">Касса 1</option>
                  <option value="Касса 2">Касса 2</option>
                  <option value="Касса 3">Касса 3</option>
                  <option value="Касса 4">Касса 4</option>
                  <option value="Касса 5">Касса 5</option>

                </select>




                <script type="text/javascript">
                  // Создаем новый объект связанных списков
                  var syncList1 = new syncList;

                  // Определяем значения подчиненных списков (2 и 3 селектов)
                  syncList1.dataList = {

                    /* Определяем элементы второго списка в зависимости
                    от выбранного значения в первом списке */

                    'Актау': {
                      '11 мкрн дом3': '11 мкрн дом3'
                    },

                    'Актобе': {
                      'Абулхаир Хана 84': 'Абулхаир Хана 84',
                      'Шернияза 51': 'Шернияза 51'
                    },

                    'Алматы': {
                      'Акан Сери 11': 'Акан Сери 11',
                      'Ауэзова 169': 'Ауэзова 169',
                      'Ауэзова 32': 'Ауэзова 32',
                      'Гоголя 91': 'Гоголя 91',
                      'Минина 24': 'Минина 24',
                      'Назарбаева 118': 'Назарбаева 118',
                      'Сатпаева 109': 'Сатпаева 109',
                      'Толе би 285': 'Толе би 285'
                    },

                    'Астана': {
                      'Абая 8': 'Абая 8',
                      'Абылай хана 6': 'Абылай хана 6',
                      'Абылайхана 32/2 (Встреча)': 'Абылайхана 32/2 (Встреча)',
                      'Бейбитшилик 47': 'Бейбитшилик 47',
                      'Кабанбай батыра, 2': 'Кабанбай батыра, 2',
                      'Кажымукана 22': 'Кажымукана 22',
                      'Кенесары 65': 'Кенесары 65',
                      'Сатпаева 23/1': 'Сатпаева 23/1',
                      'Сыганак 18': 'Сыганак 18',
                      'Тауелсыздык 45': 'Тауелсыздык 45'
                    },


                    'Атырау': {
                      'Сатпаева 32': 'Сатпаева 32'
                    },

                    'Караганда': {

                      'Абдирова 19': 'Абдирова 19',
                      'Майкудук 48': 'Майкудук 48',
                      'Шахтеров (Ермекова) 52': 'Шахтеров (Ермекова) 52'
                    },

                    'Кокшетау': {
                      'Абая 143': 'Абая 143'
                    },


                    'Костанай': {
                      'Абая 173': 'Абая 173'
                    },


                    'Павлодар': {
                      'Назарбаева 89': 'Назарбаева 89'
                    },

                    'Семей': {
                      'Дулатова 145': 'Дулатова 145'
                    },


                    'Талдыкорган': {
                      'Абая 254': 'Абая 254'
                    },

                    'Уральск': {
                      'Курмангазы 165': 'Курмангазы 165'
                    },


                    'Тараз': {
                      'Абая 170': 'Абая 170',
                      'Самал 14': 'Самал 14'
                    },

                    'Шымкент': {

                      'Байтурсынова 20': 'Байтурсынова 20',
                      'Иляева 5/4': 'Иляева 5/4',
                      'Назарбекова 11 (Нурсат)': 'Назарбекова 11 (Нурсат)',
                      'Рыскулова 24/1': 'Рыскулова 24/1',
                      'Рыскулова 84а': 'Рыскулова 84а',
                      'Север (Терискей 9)': 'Север (Терискей 9)',
                      'Уалиханова 192 (11 мкрн)': 'Уалиханова 192 (11 мкрн)'
                    }

                  };

                  // Включаем синхронизацию связанных списков
                  syncList1.sync("List1", "List2");
                </script>

              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
          <!--------------------------------------------------------------------------->
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Отчетные формы</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <!-- Date range -->
                <div class="container">
                  <!--Авансовый отчет за:-->
                  <div class="form-group">
                    <p><b></b></p>
                    <label>&ensp; Авансовый отчет за:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <form action="#" method="post">

                        <b><input type="date" class="form-control" style="width: 16rem;" name="date1"> </b>

                        <span> &nbsp;<input type="submit" name="gogo" class="btn btn-success" value="Сформировать"></span>
                      </form>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!--Авансовый отчет за: -->
                  <!--гарантийного срока-->
                  <div class="form-group">
                    <p><b></b></p>
                    <label>&ensp; До окончания гарантийного срока осталось:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-time"></i>
                      </div>
                      <form action="#" method="post">

                        <select class="form-control select2" style="width: 10%;font-weight:900; " name="day" tabindex="4">
                          <option value="1"><b>1 день</b></option>
                          <option value="2">2 дня</option>
                          <option value="3">3 дня</option>
                          <option value="4">4 дня</option>
                          <option value="5">5 дней</option>
                          <option value="6">6 дней</option>
                          <option value="7">7 дней</option>
                          <option value="8">8 дней</option>
                          <option value="9">9 дней</option>
                          <option value="10">10 дней</option>
                          <option value="11">11 дней</option>
                          <option value="12">12 дней</option>
                          <option value="13">13 дней</option>
                          <option value="14">14 дней</option>
                          <option value="15">15 дней</option>
                          <option value="16">16 дней</option>
                          <option value="17">17 дней</option>
                          <option value="18">18 дней</option>
                          <option value="19">19 дней</option>
                          <option value="20">20 дней</option>
                          <option value="21">21 день</option>
                          <option value="22">22 дня</option>
                          <option value="23">23 дня</option>
                          <option value="24">24 дня</option>
                          <option value="25">25 дней</option>
                          <option value="26">26 дней</option>
                          <option value="27">27 дней</option>
                          <option value="28">28 дней</option>
                          <option value="29">29 дней</option>
                          <option value="30">30 дней</option>
                        </select>

                        <span> &nbsp;<input type="submit" name="gogo" class="btn btn-success" value="Сформировать"></span>
                      </form>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!--гарантийного срока -->

                </div><!-- /.container -->
              </div><!-- /.box-body -->
            </div><!-- /.box box-primary -->
          </div><!-- /.col-md-6 -->
          <!--------------------------------------------------------------------------->
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Отчетные формы</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <!-- Date range -->
                <div class="container">
                  <!--Журнал операции-->
                  <div class="form-group">
                    <p><b></b></p>
                    <label>&ensp; Журнал операции по залоговым билетам за период</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <form action="" method="post">

                        <b><input type="date" class="form-control" style="width: 16rem;" name="date1">
                          <input type="date" class="form-control" style="width: 16rem;" name="date2"></b>

                        <span> &nbsp;<input type="submit" name="gogo" class="btn btn-success" value="Сформировать"></span>
                      </form>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!--Журнал операции -->

                  <!--Ежедневная сводка за:-->
                  <div class="form-group">
                    <p><b></b></p>
                    <label>&ensp; Ежедневная сводка за:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <form action="#" method="post">

                        <b><input type="date" class="form-control" style="width: 16rem;" name="date1"> </b>

                        <span> &nbsp;<input type="submit" name="gogo" class="btn btn-success" value="Сформировать"></span>
                      </form>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!--Ежедневная сводка за: -->
                </div><!-- /.container -->
              </div><!-- /.box-body -->
            </div><!-- /.box box-primary -->
          </div><!-- /.col-md-6 -->
          <!--------------------------------------------------------------------------->

        </div><!-- /.content-wrapper -->
      </section>
    </div>
          <?php require "blocks/footer.php"?> 
         <!---row--> 

