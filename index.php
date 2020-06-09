
     
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
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box box-solid box-info">
                                        <div class="box-header with-border">
                                        <h3 class="box-title">Регистрация кассы</h3>
                                        <div class="box-tools pull-right">
                                                <span class="label label-primary">Актив ломбард</span>
                                            </div><!-- /.box-tools -->
                                            </div><!-- /.box-header -->
                                            <div class="box-body">
                                                <form method="post" action="test.php">
                                                    <div class="form-group">
                                                    <label>Регион</label>
                                                        <select class="form-control" name="region" id="List1">
                                                            <option value="Алматы">Алматы</option>
                                                            <option value="Астана">Астана</option>
                                                            <option value="Актау">Актау</option>
                                                            <option value="Актобе">Актобе</option>
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
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Адрес</label>
                                                        <select id="List2" name="adress" class="form-control"></select>
                                                    </div>
                                                    <div>
                                                        <b>Касса:</b>&nbsp;
                                                        <select class="form-control select3" style=" display: inline;" name="kassa">
                                                            <option value="Касса 1">Касса 1</option>
                                                            <option value="Касса 2">Касса 2</option>
                                                            <option value="Касса 3">Касса 3</option>
                                                            <option value="Касса 4">Касса 4</option>
                                                            <option value="Касса 5">Касса 5</option>
                                                        </select>
                                                
                                                        <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
                                                        <input style="display: inline-block;" class="btn btn-danger" type="submit" name="submit"/>
                                                    </div>
                                                </form> 
                                            </div><!-- /.box-body -->
                                            <div class="box-footer text-center ">
                                                <strong> Проверьте данные несколько раз перед отправкой</strong>
                                            </div><!-- box-footer -->
                                    </div><!-- /.box -->
                                </div>                    
                                        

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
                                                
                                                
                                    </div><!-- /.row -->
                            
                                    </section >  <!--class="content-header"-->    
                                    </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->           
     <?php require "blocks/footer.php"?> 
        
      
    