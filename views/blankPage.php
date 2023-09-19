<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EasyStock | Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="./views/src/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="./views/src/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="./views/src/plugins/sweetalert2/">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
      include __DIR__ . "/shared/header.php";
    ?>
    <?php
      include __DIR__ . "/shared/aside.php";
    ?>

    <div class="content-wrapper">
      <?php
        /* include "./inc/navbar.php"; */

        include "./vistas/".$_GET['vista'].".php";

        include "./inc/script.php";
        ?>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>

  <?php
    include __DIR__ . "/shared/footer.php";
  ?>

  <script src="./views/src/plugins/jquery/jquery.min.js"></script>
  <script src="./views/src/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./views/src/dist/js/adminlte.min.js"></script>
  <script src="./views/src/dist/js/demo.js"></script>
</body>
</html>
