<?php //require_once 'blocks/Include/datebase.php';?>

 <!DOCTYPE html>
    <html lang="ru">
    
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Главная</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.1/css/fixedColumns.bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js"></script>
            <script type="text/javascript" src="linkedselect.js"></script>
          <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
             <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
               <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
          
    
    
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        </head>
    <body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">

  <!-- Logo -->
  <a href="index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Актив</b>Lombard</span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
    
       
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">Директор магазина</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              <p>
                            Директор магазин
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>

  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Навигация</li>
      <li class="treeview">
        <a href="index.php">
          <i class="fa fa-windows"></i>
          <span>ГЛАВНАЯ</span>
          <span class="label label-primary pull-right">go</span>
        </a>

      </li>

      <li class="treeview">
        <a href="#"> <!--slichved.php-->
          <i class="fa fa-industry"></i> <span>СЛИЧ.ВЕДОМОСТЬ</span>
        </a>
      </li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>ДОКУМЕНТЫ</span> <span class="label pull-right bg-red">eZH</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="vd.php?t=1"><i class="fa fa-twitch"></i>Входящие документы</a></li>
          <li><a href="ishd.php?t=2"><i class="fa fa-twitch"></i>Исходящие документы</a></li>
        </ul>
      </li>


      <li class="active treeview">
        <a href="#">
          <i class="fa fa-bank"></i> <span>ФИН.Отчеты за</span> <span class="label pull-right bg-red">3</span>
        </a>
        <ul class="treeview-menu">

            <!--  <li><a href="january.php"><i class="fa fa-calendar"></i>Январь</a></li>
              <li><a href="february.php"><i class="fa fa-calendar"></i>Февраль</a></li>
          <li><a href="mart.php"><i class="fa fa-calendar"></i>Март</a></li>
          <li><a href="april.php"><i class="fa fa-calendar"></i>Апрель</a></li>-->
          <li><a href="may.php"><i class="fa fa-calendar"></i>Май</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="diagramma.php">
          <i class="fa fa-industry"></i> <span>ГРАФИКС</span> <span class="label pull-right bg-red">3</span>
        </a>
      </li>

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-chrome"></i> <span>ОТЧЕТЫ</span> <span class="label pull-right bg-red">3</span>
        </a>
        <ul class="treeview-menu">

          <li><a href="eoreports.php"><i class="fa fa-user"></i>Эксперт оценщик</a></li>
          <li><a href="dirreports.php"><i class="fa fa-user-secret"></i>Директор</a></li>
        </ul>
      </li>

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-ils"></i> <span>АУКЦИОНИСТ</span> <span class="label pull-right bg-red">3</span>
        </a>
        <ul class="treeview-menu">

          <li><a href="torgi.php"><i class="fa fa-bitcoin"></i>Торги</a></li>
          <li><a href="ri.php"><i class="fa fa-bank"></i>Реализованное имущество</a></li>
          <li><a href="aukreports.php"><i class="fa fa-bars"></i>Отчеты</a></li>
        </ul>
      </li>




      <li class="active treeview">
        <a href="#">
          <i class="fa fa-laptop"></i> <span>МАГАЗИНЫ</span> <span class="label pull-right bg-red">12</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="poisk.php"><i class="fa fa-gg"></i>Поиск.фильтр</a></li>
          <li><a href="magmart.php"><i class="fa fa-calendar"></i>Март</a></li>
          <li><a href="magapril.php"><i class="fa fa-calendar"></i>Апрель</a></li>
          <li><a href="magamai.php"><i class="fa fa-calendar"></i>Май</a></li>
          <li><a href="magjn.php"><i class="fa fa-calendar"></i>Июнь</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i> <span>INTERNET МАГАЗИН</span> <span class="label label-primary pull-right">go</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="alltovar.php"><i class="fa fa-book"></i>Все товары</a></li>
          <li><a href="zakazy.php"><i class="fa fa-pie-chart"></i>Все заказы</a></li>



        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>ПОЛЬЗОВАТЕЛИ</span> <span class="label pull-right bg-yellow">51</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="regdir.php"><i class="fa fa-book"></i>Регистрация</a></li>
          <li><a href="directors.php"><i class="fa fa-pie-chart"></i>Директора</a></li>
          <li><a href="allsellers.php"><i class="fa fa-edit"></i>Продавцы магазинов</a></li>
        </ul>
      </li>
        <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Склад</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="aukcionist-report.php"><i class="fa fa-circle-o"></i>Отчет директора </a></li>
          <li><a href="dir-storePage1.php"><i class="fa fa-circle-o"></i>Склады</a></li>
          <li><a href="remontnik.php"><i class="fa fa-circle-o"></i>Ремонтник</a></li>
          <li><a href="aukcionist.php"><i class="fa fa-circle-o"></i>Аукционист</a></li>
      
        </ul>
      </li>

      <li class="treeview">
        <a href="reportform.php">
          <i class="fa fa-edit"></i> <span>Отчетные формы</span>
        </a>

      </li>
      

      </li>
      <li class="treeview">
        <a href="bux.php">
          <i class="fa fa-money"></i> <span>Пополнение кассы</span>
        </a>

      </li>
      </li>
      <li class="treeview">
        <a href="bd.php">
          <i class="fa fa-database"></i> <span>База данных</span>
        </a>
      </li>



      <li class="treeview">
        <a href="../../logout.php">
          <i class="fa fa-share"></i>
          <span>Выход</span>

        </a>

      </li>






    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
