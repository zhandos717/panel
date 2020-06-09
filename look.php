<?php require "blocks/header.php"?>


<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Актау/11 мкрн дом3
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
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Редактирование / удаление</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="functions/redak.php" method="post">
                <div class="box-body">
                  <input name="id" value="20" hidden="" />
                  <input name="region" value="Актау" hidden="" />
                  <input name="adress" value="11 мкрн дом3" hidden="" />
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Дата отчета</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputEmail3" name="data" value="2020-06-01" />
                    </div>
                  </div>
                  <!-- <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Время update</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="reg_date" value="02-06-2020 в 10:05" />
                      </div>
                    </div>-->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Доход ломбард</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="dl" value="204310" />
                    </div>
                  </div>

                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Доход магазин</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="dm" value="111797" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Доп доход</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="dop" value="0" />
                    </div>
                  </div>
                  <!--
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Доход</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="dohod" value="316107" />
                      </div>
                    </div>-->

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Стабильный расход</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="stabrashod" value="41205" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Текущий расход</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="tekrashod" value="0" />

                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">
                      <font color="red">ПРИМЕЧАНИЕ</font>
                    </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="comment" value="" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Все клиенты</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="allclients" value="30" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Новые клиенты</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="newclients" value="8" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Выдача за сут</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="vzs" value="789980" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Возврат</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="vozvrat" value="428280" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Накладные</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="nakladnoy" value="42262" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Чистая выдача</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="chv" value="319438" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Аукционист техника</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="auktech" value="1583060" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Аукционист шубы</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="aukshubs" value="564727" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Нал в залоге</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="nalvzaloge" value="15653700" />
                    </div>
                  </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                  <a href="functions/deleted.php?id=20&region=Актау&adress=11 мкрн дом3"><button class="btn btn-danger">УДАЛИТЬ</button></a>
                  <button type="submit" class="btn btn-success pull-right">СОХРАНИТЬ</button>
                </div><!-- /.box-footer -->
              </form>

              
            </div><!-- /.box -->


          </div><!-- /.col -->

          </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->


    <?php require "blocks/footer.php"?> 