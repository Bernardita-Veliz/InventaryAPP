<?php
  $page_title = 'Lista de productos';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
  $products = join_product_table();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>administrar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">InventaryAPP</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="home.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-laptop"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="agregar_producto.php">
              <i class="bi bi-circle"></i><span>Agregar Productos</span>
            </a>
          </li>
          <li>
            <a href="administrar_producto.php">
              <i class="bi bi-circle"></i><span>Administrar Productos</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

    
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Clientes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="administrar_cliente.php">
              <i class="bi bi-circle"></i><span>Administrar Clientes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-c-circle"></i><span>Proveedor</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      
          <li>
            <a href="administrar_marca.php">
              <i class="bi bi-circle"></i><span>Administrar marcas</span>
            </a>
          </li>

        </ul>
      </li><!-- End Charts Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Bitacora</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="agregar_bitacora.php">
              <i class="bi bi-circle"></i><span>Agregar bitacora</span>
            </a>
          </li>
          <li>
            <a href="administrar_bitacora.php">
              <i class="bi bi-circle"></i><span>Administrar bitacora</span>
            </a>
          </li>
        </ul>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Productos</li>
          <li class="breadcrumb-item active">Administrar productos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="row">
          <div class="col-md-12">
            <?php echo display_msg($msg); ?>
          </div>
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading clearfix">
              <div class="pull-right">
                <a href="agregar_producto.php" class="btn btn-primary">Agregar producto</a>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th class="text-center" style="width: 10%;"> Nombre </th>
                    <th class="text-center" style="width: 10%;"> Tipo de producto </th>
                    <th class="text-center" style="width: 10%;"> Cantidad </th>
                    <th class="text-center" style="width: 10%;"> Marca </th>
                    <th class="text-center" style="width: 10%;"> Cliente </th>
                    <th class="text-center" style="width: 100px;"> Acciones </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($products as $product):?>
                  <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td> <?php echo remove_junk($product['name']); ?></td>
                    <td class="text-center"> <?php echo remove_junk($product['tipo']); ?></td>
                    <td class="text-center"> <?php echo remove_junk($product['quantity']); ?></td>
                    <td class="text-center"> <?php echo remove_junk($product['categorie']); ?></td>
                    <td class="text-center"> <?php echo remove_junk($product['clientes']); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="editar_producto.php?id=<?php echo (int)$product['id'];?>" class="btn btn-info btn-xs"  title="Editar" data-toggle="tooltip">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="delete_producto.php?id=<?php echo (int)$product['id'];?>" class="btn btn-danger btn-xs"  title="Eliminar" data-toggle="tooltip">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

        

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bernardita Veliz</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>