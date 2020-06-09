
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
                                <?php
                if($_POST['submit']){
                echo 'Регион: ' .$_POST['region']. '<br />';
                echo 'Филиал: ' .$_POST['adress']. '<br />';
                echo 'Касса номер: ' .$_POST['kassa']. '<br />';
                echo 'IP пользователя: ' .$_POST['ip']. '<br />';
               // echo 'Введено имя: ' .$_POST['name']. '<br />';
                //echo '<a href="' .$_SERVER['HTTP_REFERER']. '">Назад</a>';
                }
            ?>
        </div><!-- /.box-body -->
        <div class="box-footer text-center ">
        <button class="btn btn-warning"> <?php if($_POST['submit']){ echo '<a href="' .$_SERVER['HTTP_REFERER']. '">Назад</a>';}?> </button>
        </div><!-- box-footer -->
        </div><!-- /.box -->
            </div>                    
                </div><!-- /.row -->
               </div><!-- /.box-footer -->
             </div><!-- /.box -->
         

     </section> 
     </div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
     <?php require "blocks/footer.php"?> 
      
    




