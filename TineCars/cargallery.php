
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Car Rental System</title>
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
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar.jpeg" class="user-image" alt="User Image">
              <span class="hidden-xs">AUGUSTINE</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar.jpeg" class="img-circle" alt="User Image">

                <p>
                 AUGUSTINE
                  <small>Member since Nov. 2012</small>
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
          <img src="dist/img/avatar.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>AUGUSTINE</p>
          <a href=""><i class="fa fa-circle text-success"></i> User</a>
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
        <li class="active">
          <a href="cargallery">
            <i class="fa fa-cab"></i> <span>VOITURES</span>
          </a>
        </li>
       
        <li >
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
            <li><a href="car.php"><i class="fa fa-circle-o"></i> Car</a></li>
            <li><a href="costumer.php"><i class="fa fa-circle-o"></i> Costumer</a></li>
            <li><a href="carowner.php"><i class="fa fa-circle-o"></i> Car Owner</a></li>
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
        <i class="fa fa-cab"></i> VOITURES
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-car"></i> Ajouter une voiture</h3><button type="button" class="btn btn-success btn-sm" style="margin-left: 2%" data-toggle="modal" data-target="#add">
               <i class="fa fa-plus"></i> Ajouter
              </button>
        <div class="modal fade" id="add">
          <div class="modal-dialog">
            <form role="form" action="addCar.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NOUVELLE VOITURE</h4>
              </div>
              <div class="modal-body">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ENTREZ LES INFOS </h3>
            </div>
              <div class="box-body">
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Immatriculation</label>
                  <input type="text" name="immat" class="form-control"   placeholder="Ex: AZ-9555">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input type="text" name="nom" class="form-control"   placeholder="nom de la voiture">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Model</label>
                  <input type="text" name="model" class="form-control"   placeholder="Model">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Prix</label>
                  <input type="number" name="prix" class="form-control"   placeholder="Enter Score">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image input</label>
                  <input type="file" name="img" id="exampleInputFile">
                </div>
                
              </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
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
                  <th style="width: 10%"><i class="fa fa-image"></i> Image</th>
                  <th style="width: 20%"><i class="fa fa-list-alt"></i> Immatriculation</th>
                  <th style="width: 20%"><i class="fa fa-car"></i> Nom</th>
                  <th style="width: 15%"><i class="fa fa-car"></i> Model</th>
                  <th style="width: 15%"><i class="fa fa-paint-brush"></i> Prix</th>
                  <th style="width: 20%"> </th>
                </tr>
                </thead>
                <tbody>
                <?php

                    // DECLARATION DES CONSTANTES DE CONNEXION
                    define('DBHOST','localhost'); //SERVEUR
                    define('DBUSER','root');     //UTILISATEUR BASE DE DONNEES
                    define('DBPASS','');      //MOT DE PASSE
                    define('DBNAME','CarDB');     //NOM DE LA BASE DE DONNEES

                    $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;

                    try{
                        //ON SE CONNECTE À LA BASE DE DONNÉES
                        $db=new PDO($dsn,DBUSER,DBPASS);
                        //  ON S'ASSURE D'ENVOYER LES DONNÉES EN UTF-8
                        $db->exec('SET NAMES utf8');
                    }catch (PDOException $e){
                        die($e->getMessage());
                    }

                    // LA REQUETE POUR SELECTIONNER TOUTES LES VOITURES
                    $sql="SELECT * FROM `VOITURE`";
                    try{
                        //  ON EXECUTE LA REQÊTE
                        $req=$db->query($sql);
                        //ON RECUPERE LA LISTE DES VOITURES 
                        $voitures=$req->fetchAll(PDO::FETCH_ASSOC);
                        // var_dump($voitures);
                        // exit();
                    }catch(Exception $e){
                        echo $e->getMessage();
                    }
                  ?>
                <?php
                //ON AFFICHE LES INFOS RECUPEREES
                foreach( $voitures as $v){
                  echo '<tr>';
                    echo '<td><img src="'.$v['image'].'" class="img-square" alt="User Image" style="width: 100%"></td>';
                    echo '<td>'.$v['immat'].'</td>';
                    echo '<td>'.$v['nom'].'</td>';
                    echo '<td>'.$v['model'].'</td>';
                    echo '<td align="center"><span class="btn btn-success btn-xs">'.$v['prix'].' fcfa</span></td>';
                    echo '<td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button><a href="deleteCar.php?carid='.$v['id'].'"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a><button type="button" style="background-color: #c3039e;" class="btn btn-sm"><i class="fa fa-eye" style="color: white"></i></button></td>';
                  echo '</tr>';
                }
                ?>
                
                </tbody>
                <tfoot>
                <tr style="background-color: #c5c5c5;">
                  <th>Image</th>
                  <th>Immtriculation</th>
                  <th>nom</th>
                  <th>Model</th>
                  <th>Prix</th>
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
                <h4 class="modal-title">Update Car Gallery</h4>
              </div>
              <div class="modal-body">
            <div class="box box-warning">
            <div class="box-header with-border">
            </div>
              <div class="box-body">
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Immatriculation</label>
                  <input type="text" name="immat" class="form-control"   placeholder="Ex: AZ-9555">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input type="text" name="nom" class="form-control"   placeholder="nom de la voiture">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Modèle</label>
                  <input type="text" name="model" class="form-control"   placeholder="Model">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Prix</label>
                  <input type="text" name="prix" class="form-control"   placeholder="Enter Score">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image input</label>
                  <input type="file" name="img" id="exampleInputFile">
                </div>
              </div>
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->            
      </div>
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
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Car Rental System</a>.</strong> All rights
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
