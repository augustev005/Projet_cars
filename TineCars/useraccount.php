<?php
 require('db.php');
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Système de location de voitures</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="carreview.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><i class="fa fa-cab"></i></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><i class="fa fa-cab"></i> Tine</b>CARS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Nom</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Nom
                  <small>Membre depuis 20 Mars 2022</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-center">
              <a class="btn btn-danger" style="width: 100%" href="index.php"><i class="fa fa-spinner fa-spin"></i> Log out</a>                
            </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Nom</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Utilisateur</a>
        </div>
      </div> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENUS</li>
        <li >
          <a href="carreview.php">
            <i class="fa fa-cab"></i> <span>COMMANDES</span>
          </a>
        </li>
        <li>
          <a href="cargallery.php">
            <i class="fa fa-cab"></i> <span>VOITURES</span>
          </a>
        </li>
        
        </li> -->
        <li class="active">
          <a href="useraccount.php">
            <i class="fa fa-user-secret"></i> <span>CLIENTS</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Encoding</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="car.php"><i class="fa fa-circle-o"></i> VOITURE</a></li>
            <li><a href="costumer.php"><i class="fa fa-circle-o"></i> CLIENT</a></li>
            <li><a href="carowner.php"><i class="fa fa-circle-o"></i> PROPRIETAIRE DE VOITURE</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        <i class="fa fa-user-secret"></i> COMPTE DE L'UTILISATEUR
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-users"></i> Tableau des donnés du compte utilisateur</h3><button type="button" class="btn btn-success btn-sm" style="margin-left: 2%" data-toggle="modal" data-target="#add">
               <i class="fa fa-plus"></i> Ajouter
              </button>
        <div class="modal fade" id="add">
          <div class="modal-dialog">
            <form role="form">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ajouter un compte utilisateur</h4>
              </div>
              <div class="modal-body">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Fill In : </h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input type="text" class="form-control"  placeholder="Lastname       -      Firstname        -        Middlename">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contacts</label>
                  <input type="text" class="form-control"  placeholder="Enter Contact">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Addresse</label>
                  <input type="text" class="form-control"  placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom d'utilisateur</label>
                  <input type="text" class="form-control"  placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de Passe</label>
                  <input type="password" class="form-control" placeholder="Password">
                </div>
              </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermez</button>
                <button type="submit" class="btn btn-primary">Soumettre</button>
              </div>
            </div>
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="background-color: #c5c5c5;">
                  <th style="width: 30%"><i class="fa fa-user"></i> Nom</th>
                  <th style="width: 15%"><i class="fa fa-phone"></i> Contacts</th>
                  <th style="width: 15%"><i class="fa fa-map-marker"></i> Addresse</th>
                  <th><i class="fa fa-user"></i> Nom d'utilisateur</th>
                  <th><i class="fa fa-lock"></i> Mot de passe</th>
                  <th style="width: 7.8%"> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Jericho Rosales Jr.</td>
                  <td>899-885-8888</td>
                  <td>U.S Capitol Neg.</td>
                  <td>Jerjer</td>
                  <td>******</td>
                  <td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr>
                  <td>DAKU</td>
                  <td>+228 90-21-21-85</td>
                  <td>lomé</td>
                  <td>daku101</td>
                  <td>******</td>
                  <td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                </tr>
                </tbody>
                <tfoot>
                <tr style="background-color: #c5c5c5;">
                  <th>Nom</th>
                  <th>Contacts</th>
                  <th>Addresse</th>
                  <th>Nom d'utilisateur</th>
                  <th>Mot de passe</th>
                  <th> </th>
                </tr>
                </tfoot>
              </table>
        <div class="modal fade" id="edit">
          <div class="modal-dialog">
            <form role="form">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mise à jour du compte utilisateur</h4>
              </div>
              <div class="modal-body">
            <div class="box box-warning">
            <div class="box-header with-border">
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input type="text" class="form-control"  >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Addresse</label>
                  <input type="text" class="form-control"  >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom d'utilisateur</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de passe</label>
                  <input type="password" class="form-control"  >
                </div>
              </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">fermez</button>
                <button type="submit" class="btn btn-primary">Enregistrez</button>
              </div>
            </div>
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2022<a href="https://adminlte.io">Car Rental System</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
