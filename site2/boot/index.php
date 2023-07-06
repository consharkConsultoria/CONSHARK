<?php include_once "config.php"; ?>
<?php 
  @session_start();
  if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}
?>

<!DOCTYPE html>
<php lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>site 3</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

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


<!-- GALERIA DE FOTOS -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="css/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
<!-- GALERIA DE FOTOS -->

<link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <a href="index.php?user_id=<?php echo $user_id ?>" class="logo d-flex align-items-center">
        <img src="IMG/logo1.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        

    

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $user_id");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../CadLogin/php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <i class="nav-arrow fa fa-angle-down"></i>
            </div>
          </div>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php?user_id=<?php echo $user_id ?>">
                <i class="bi bi-person"></i>
                <span>Meu perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Ajuda</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


          </ul>
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  <div class="wrapper">
    <section class="chat-area">
      <header>
      <?php
  require "config.php";

  $adm_id =  849033943;
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '$adm_id'");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }else{
    header("Location: ../boot/index.php?user_id=$user_id");
    exit(); // Termina a execução do script após redirecionar
  }
  ?>


  <img src="../CadLogin/php/images/<?php echo $row['img']; ?>" alt="">
  <div class="details">
    <span><?php echo $row['fname']. " " . $row['lname']; ?></span>
    <p><?php echo $row['status']; ?></p>
  </div>
</header>

<div class="chat-box">
 

</div>

<form action="#" class="typing-area">
  <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $adm_id; ?>" hidden>
  <input type="text" name="message" class="input-field" placeholder="Digite aqui..." autocomplete="off">
  <button><i class="fab fa-telegram-plane"></i></button>
</form>

</section>
</div>


  <script src="javascript/chat.js"></script>




<!-- //////////////////////////////////////////////////// -->





  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Gerenciamento de projetos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php?user_id=<?php echo $user_id ?>">Inicio</a></li>
          <li class="breadcrumb-item active">Gerenciamento</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <!-- barra de status e fotos -->
          <div class="row">
            <!-- <div class="barra">
            <div></div>
          </div> onkeyup="alterarProgresso()-->
          <form action="" method="post">

          <div class="progress">
          <?php
              $msg = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $user_id");
              $row = mysqli_fetch_assoc($msg);
              ?>
            <div class="progress-bar" role="progressbar" style="width: <?php echo $row['progresso']; ?>%" aria-valuenow="<?php echo $row['progresso']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
          
          </div>
            </form>
              


          </div>
          <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Atualizações do projeto</h4>
              </div>
              <div class="card-body">
                <div>
                  <div class="btn-group w-100 mb-2">
                    <!-- <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a> -->
                  </div>
                  <div class="mb-2">
                    <!-- <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a> -->
                    <div class="float-right">
                        <!-- <form method="post" action="orgImg.php">
                            <label for="organizar">Organizar pela:</label>
                            <input type="submit" name="btnMaisRecente" value="Mais Recente">
                            <input type="submit" name="btnMaisAntigas" value="Mais Antiga">
                        </form> -->
                    </div>
                  </div>
                </div>
                <div>
                  <div class="filter-container p-0 row">
                    <!-- <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample"> -->
                        
                    <form method="post" class="form-org">
                            <label for="" class="lblOrganizar">Organizar pela:</label>
                            <input type="submit" class="btnOrg" name="btnMaisRecente" value="Mais Recente">
                            <input type="submit" class="btnOrg" name="btnMaisAntigas" value="Mais Antiga">
                    </form>

                        <?php


                          if (isset($_POST['btnMaisRecente'])) {

                            $query = "SELECT * FROM `imgprojeto` WHERE `unique_id` = $user_id ORDER BY `id_img` DESC";
                          } else if (isset($_POST['btnMaisAntigas'])) {

                            $query = "SELECT * FROM `imgprojeto` WHERE `unique_id` = $user_id ORDER BY `id_img` ASC";
                          } else {
                            
                            $query = "SELECT * FROM `imgprojeto` WHERE `unique_id` = $user_id";
                          }

                          $result = mysqli_query($conn, $query);

                          if ($result) {
                            while ($qtdImg = mysqli_fetch_array($result)) {
                                echo "<div class='item'><img class='foto-proj' src='$qtdImg[img]'></div>";
                            }
                          } else {
                            echo "Erro na consulta: " . mysqli_error($conn);
                          }
                        ?>


                      </a>
                    <!-- </div> -->
                  </div>
                </div>

              </div>
            </div>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>


<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
          <!-- barra de status e fotos -->
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title2">Atividades recentes</h5>

              <div class="activity">

            <div id="timeline">

              <?php
                  $result = mysqli_query($conn, "SELECT * FROM atividadesrecentes WHERE unique_id = $user_id");

                  if ($result) {
                    while ($atvRec = mysqli_fetch_array($result)) {
                      echo "<div class='container-atv'>";
                      echo "<div class='data-atividade-recente'>$atvRec[data]</div>";
                      echo "<div class='bolinha-atividade-recente' style='background-color: $atvRec[cor]'></div>";
                      echo "<div class='item-atividade-recente'>$atvRec[atividade]</div>";
                      echo "<div class='separ-atividade-recente'></div>";
                      echo "</div>";
                    }
                  } else {
                    echo "Erro na consulta: " . mysqli_error($conn);
                  }
                ?>
              <!-- <script src="script.js"></script> -->
            </div>
              </div>

            </div>
          </div><!-- End Recent Activity -->


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->


  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Conshark</span></strong>. Todos os direitos reservados.
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="adminJS/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="adminJS/bootstrap.bundle.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="adminJS/ekko-lightbox.min.js"></script>
  <!-- AdminLTE App -->
  <script src="adminJS/adminlte.min.js"></script>
  <!-- Filterizr-->
  <script src="adminJS/jquery.filterizr.min.js"></script>
  <!-- AdminLTE for demo purposes -->

</body>

</html>