    <?php require "blocks/header.php"; ?>
                                           
    <script type="text/javascript" src="linkedselect.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <section class="content-header">
        <h1>
          Торги
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
          <li><a href="#">торги</a></li>
          <li class="active">Торги</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Торги</h3>
              </div>
              <script type="text/javascript" src="linkedselect.js"></script>

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
              <select id="List2" name="adress"></select> &nbsp;&nbsp;


              <b>Касса:</b>&nbsp;<select name="kassa">
                <option value="Все кассы">Все кассы</option>
                <option value="Касса 1">Касса 1</option>
                <option value="Касса 2">Касса 2</option>
                <option value="Касса 3">Касса 3</option>
                <option value="Касса 4">Касса 4</option>
                <option value="Касса 5">Касса 5</option>

              </select>

              &nbsp;&nbsp;<button class="btn  bg-purple">Сформировать</button>


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
              <hr>
              <section>
                <style>
                  .layer {
                    overflow-x: scroll;
                    /* Добавляем полосу прокрутки */
                    width: 100%;
                    /* Ширина блока */
                    height: 100%;
                    /* Высота блока */
                    padding: 5px;
                    /* Поля вокруг текста */
                    //  border: solid 1px black; /* Параметры рамки */
                    white-space: nowrap;
                    /* Запрещаем перенос строк */
                  }
                </style>
                <div class="layer">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr style="background: #398ebd; color: white;">
                        <th>Код филиала</th>
                        <th>Дата проведения торгов</th>
                        <th>Метод проведения торгов</th>
                        <th>Место проведения торгов</th>
                        <th>Кол-во участников</th>
                        <th>Касса</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>43</td>
                        <td>27.04.2020</td>
                        <td>Английский</td>
                        <td>ул. Абая, 254</td>
                        <td>2</td>
                        <td>Касса №2</td>
                      </tr>
                      <tr>
                        <td>43</td>
                        <td>26.04.2020</td>
                        <td>Английский</td>
                        <td>ул. Абая, 254</td>
                        <td>2</td>
                        <td>Касса №2</td>
                      </tr>
                      <tr>
                        <td>43</td>
                        <td>25.04.2020</td>
                        <td>Голандский</td>
                        <td>ул. Абая, 254</td>
                        <td>2</td>
                        <td>Касса №2</td>
                      </tr>
                      <tr>
                        <td>43</td>
                        <td>24.04.2020</td>
                        <td>Голандский</td>
                        <td>ул. Абая, 254</td>
                        <td>2</td>
                        <td>Касса №1</td>
                      </tr>
                    </tbody>
                  </table>
                  
                  
                  

                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

    </div>
     <?php require "blocks/footer.php"?> 
         
      
    