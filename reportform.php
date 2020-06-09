
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
                  <!-- /.col (left) -->
                    <div class="col-md-6">
                      <div class="box box-info">
                        <div class="box-header">
                          <h3 class="box-title">Отчетные формы</h3>
                        </div>
                        <div class="box-body">


                             <!--Сведения по выданным/возвращенным кредитам-->
                             <div class="form-group">
                              <p><b></b></p>
                              <label>&ensp; Сведения по выданным/возвращенным кредитам и реализованным залогам за период</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <form action="spvvk.php" method="post">
                    
                                  <b></i><input type="date" class="form-control"style="width: 14rem;" name="date1">
                                  <input type="date" class="form-control"style="width: 14rem;"  name="date2"></b>

                                <span> &nbsp;<input type="submit"  name="gogo" class="btn btn-success"  value="Сформировать"></span>
                                </form>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!--Сведения по выданным/возвращенным кредитам -->

                             <!--Баланс денежных средств-->
                             <div class="form-group">
                              <p><b></b></p>
                              <label>&ensp; Баланс денежных средств за период</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <form action="balans.php" method="post">
                    
                                  <b></i><input type="date" class="form-control"style="width: 14rem;" name="date1">
                                  <input type="date" class="form-control"style="width: 14rem;"  name="date2"></b>

                                <span> &nbsp;<input type="submit"  name="gogo" class="btn btn-success"  value="Сформировать"></span>
                                </form>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!--Баланс денежных средств -->

                             <!--отчет по доходам в разрезе сотрудников-->
                             <div class="form-group">
                              <p><b></b></p>
                              <label>&ensp; Статистический отчет по доходам в разрезе сотрудников за период</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <form action="statreport.php" method="post">
                    
                                  <b></i><input type="date" class="form-control"style="width: 14rem;" name="date1">
                                  <input type="date" class="form-control"style="width: 14rem;"  name="date2"></b>

                                <span> &nbsp;<input type="submit"  name="gogo" class="btn btn-success"  value="Сформировать"></span>
                                </form>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!--отчет по доходам в разрезе сотрудников -->

                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                        <!-- /.box -->
                      </div>

                      <div class="col-md-6">
        
                        <div class="box box-info">
                          <div class="box-header">
                            <h3 class="box-title">Отчетные формы</h3>
                          </div>
                          <div class="box-body">

                            <!--по изъятым товарам-->
                            <div class="form-group">
                              <p><b></b></p>
                              <label>&ensp; Сведения об операциях по изъятым товарам за период</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <form action="izyat.php" method="post">
                    
                                  <b></i><input type="date" class="form-control"style="width: 14rem;" name="date1">
                                  <input type="date" class="form-control"style="width: 14rem;"  name="date2"></b>

                                <span> &nbsp;<input type="submit"  name="gogo" class="btn btn-success"  value="Сформировать"></span>
                                </form>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!--по изъятым товарам -->

                            <!--Журнал операции-->
                            <div class="form-group">
                              <p><b></b></p>
                              <label>&ensp; Журнал операции по залоговым билетам за период</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <form action="oper.php" method="post">
                    
                                  <b></i><input type="date" class="form-control"style="width: 14rem;" name="date1">
                                  <input type="date" class="form-control"style="width: 14rem;"  name="date2"></b>

                                <span> &nbsp;<input type="submit"  name="gogo" class="btn btn-success"  value="Сформировать"></span>
                                </form>
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!--Журнал операции -->
                            
                             <!--nalvzaloge -->
                          <div class="form-group">
                            <p><b></b></p>
                            <label>&ensp;Остатки залогового имущества  на</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <form action="nalvzaloge.php" method="post">
                                <b><input type="date" class="form-control pull-left" style="width: 15rem;" name="date1"></b>
                                <span>&nbsp; <input type="submit" name="gogo" class="btn btn-success"  value="Сформировать"></span>
                               </form>
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!--nalvzaloge -->
                        
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>
                      </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
                      <?php require "blocks/footer.php"?> 
    
