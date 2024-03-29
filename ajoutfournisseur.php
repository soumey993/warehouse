<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestion de Magasins et Boutiques</title>
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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Warehouse</span>
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
            <img src="assets/img/maphoto.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">A.A Soumey</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Abdoulaye Abdourahimou</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
  <?php include_once "menu.php"; ?>

  <main id="main" class="main">

   
    <section class="section">
      <div class="col-md-12">
      <div class="bg-transparent rounded h-100 p-4">
                        <h4> Enregistrement des Fournisseurs</h4>
                    <hr>
            <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="">Nom</label>
                    <input type="text" name="nom_fournisseur" class="form-control" placeholder="Entrez nom " required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom_fournisseur" class="form-control" placeholder="Entrez prenom" required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Contact</label>
                    <input type="int" name="contact_fournisseur" class="form-control" placeholder="Entrez contact" required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Mail</label>
                    <input type="text" name="mail_fournisseur" class="form-control" placeholder="Entrez mail" required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Pays</label>
                    <input type="text" name="pays_fournisseur" class="form-control" placeholder="Entrez pays" required> 

                </div>
                
                
                <button type="submit" name="augmente" class="btn btn-success">Enregistrer</button>
                <a href="./?page=fournisseur" class="btn btn-danger"> Annuler </a>
            </form>

            <?php
      $connection = mysqli_connect("localhost","root", "");
      $db = mysqli_select_db($connection, 'gestion_stock');

      if(isset($_POST['augmente']))
      {
          $nomcommune= $_POST['nom_fournisseur'];
          $nbrehbt= $_POST['prenom_fournisseur'];
          $contact= $_POST['contact_fournisseur'];
          $mail= $_POST['mail_fournisseur'];
          $pays= $_POST['pays_fournisseur'];
          

          $query = "INSERT INTO fournisseur(nom_fournisseur, prenom_fournisseur, contact_fournisseur, mail_fournisseur, pays_fournisseur) 
          VALUES('$nomcommune', '$nbrehbt', $contact, ' $mail', '$pays')";
          $query_run = mysqli_query($connection, $query);

          if($query_run)
          {
              echo '<script> alert("Enregistrement effectué"); </script>';
          }
          else
          {
            echo '<script> alert("Enregistrement non effectué"); </script>';
          }
      }

?>

        <div class="clearfix"></div>
        <h6 class="mb-4 my-4">Fournisseurs déjà Enregistrés</h6>
        <table class="table table-bordered">
               <thead class="table-dark">
                 <tr>
                     <th>ID</th>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>Contact</th>
                     <th>Mail</th>
                     <th>Pays</th>     
                </tr>
                </thead>

                <tbody>
                  <?php
                  $sql1 = "SELECT * FROM fournisseur where etat=1";
                  $requete1 = mysqli_query($connection, $sql1);
                  $Donnees = mysqli_fetch_all($requete1);
                  foreach($Donnees as $Donnee){ 
                        echo "<tr>
                        <th>$Donnee[0]</th>
                        <th>$Donnee[1]</th>
                        <th>$Donnee[2]</th>
                        <th>$Donnee[3]</th>
                        <th>$Donnee[4]</th>
                        <th>$Donnee[5]</th>
                     
                        
                          </tr>" ;
                  }
                  ?>
                </tbody>
         </table>
                </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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