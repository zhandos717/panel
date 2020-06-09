
 <?php require "blocks/header.php"?>
    <script type="text/javascript" src="linkedselect.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <section class="content-header">
        <h1>
          Отчетные формы - Аукционист
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">Отчетные формы - Аукционист</li>
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


                    'Тараз': {
                      'Абая 170': 'Абая 170',
                      'Самал 14': 'Самал 14'
                    },

                    'Уральск': {
                      'Курмангазы 165': 'Курмангазы 165'
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

          <!-- /.col (left) -->
          <div class="col-md-6">
            <div class="box box-info">
              <!--<div class="box-header">
                          <h3 class="box-title"></h3>
                        </div>-->
              <div class="box-body">


                <!--Товарный отчет -->
                <div class="form-group">
                  <p><b></b></p>
                  <label>&ensp; Товарный отчет за</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <form action="" method="post">

                      <b></i><input type="date" class="form-control" style="width: 15rem;" name="date1">
                      </b>

                      <span> &nbsp;<input type="submit" name="gogo" class="btn btn-warning" value="Сформировать"></span>
                    </form>
                  </div>
                  <!-- /.input group -->
                </div>
                <!--Товарный отчет  -->


                <!--Товарный отчет -->
                <div class="form-group">
                  <p><b></b></p>
                  <label>&ensp; Сведения по реализованным залогам за период </label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <form action="sprz.php" method="post">

                      <b></i><input type="date" class="form-control" style="width: 15rem;" name="date1">
                        <input type="date" class="form-control" style="width: 15rem;" name="date2"></b>

                      <span> &nbsp;<input type="submit" name="gogo" class="btn btn-warning" value="Сформировать"></span>
                    </form>
                  </div>
                  <!-- /.input group -->
                </div>
                <!--Товарный отчет  -->

                <!--Товарный отчет -->
                <div class="form-group">
                  <p><b></b></p>
                  <label>&ensp; Сведения по продажам в разрезе сотрудников за период </label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <form action="sppvrs.php" method="post">

                      <b></i><input type="date" class="form-control" style="width: 15rem;" name="date1">
                        <input type="date" class="form-control" style="width: 15rem;" name="date2"></b>

                      <span> &nbsp;<input type="submit" name="gogo" class="btn btn-warning" value="Сформировать"></span>
                    </form>
                  </div>
                  <!-- /.input group -->
                </div>
                <!--Товарный отчет  -->




              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.box -->
          </div>

          <div class="col-md-6">

            <div class="box box-info">
              <!--<div class="box-header">
                          <h3 class="box-title"></h3>
                        </div>-->
              <div class="box-body">


                <!--Журнал операции-->
                <div class="form-group">
                  <p><b></b></p>
                  <label>&ensp; Инвентаризационная ведомость на</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <form action="iv.php" method="post">

                      <b><input type="date" class="form-control pull-left" style="width: 15rem;" name="date1"></b>

                      <span> &nbsp;<input type="submit" name="gogo" class="btn btn-success" value="Сформировать"></span>
                    </form>
                  </div>
                  <!-- /.input group -->
                </div>
                <!--Журнал операции -->

                <!--Остатки залогового имущества наe -->
                <div class="form-group">
                  <p><b></b></p>
                  <label>&ensp;Остатки залогового имущества на</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <form action="auknalvzaloge.php" method="post">
                      <b><input type="date" class="form-control pull-left" style="width: 15rem;" name="date1"></b>
                      <span>&nbsp; <input type="submit" name="gogo" class="btn btn-success" value="Сформировать"></span>
                    </form>
                  </div>
                  <!-- /.input group -->
                </div>
                <!--Остатки залогового имущества на -->


              </div><!-- /.container -->
            </div><!-- /.box-body -->
          </div><!-- /.box box-primary -->
        </div><!-- /.col-md-6 -->
        <!--------------------------------------------------------------------------->

    </div><!-- /.content-wrapper -->

  <?php require "blocks/footer.php"?> 

  