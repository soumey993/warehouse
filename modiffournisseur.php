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
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Tableau de Bord</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Livraisons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          
        <a href="livraison.php">
              <i class="bi bi-circle"></i><span>livraisons</span>
            </a>
          </li>
          <li>
            <a href="magasin.php">
              <i class="bi bi-circle"></i><span>Magasin</span>
            </a>
          </li>
          <li>
            <a href="fournisseur.php" class="active">
              <i class="bi bi-circle"></i><span>Fournisseur</span>
            </a>
          </li>
          <li>
            <a href="produit.php">
              <i class="bi bi-circle"></i><span>Produits</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
           <a class="nav-link collapsed"  href="boutique.php">
          <i class="bi bi-journal-text"></i><span>Boutiques</span>
        </a>
  
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Ravitaillements</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="magasin1.php">
                <i class="bi bi-circle"></i><span>magasin</span>
              </a>
            </li>
          <li>
            <a href="boutique1.php">
              <i class="bi bi-journal-text"></i><span>Boutiques</span>
            </a>
  
         </li><!-- End Forms Nav -->
         <li>
            <a href="ravitaillement.php">
              <i class="bi bi-journal-text"></i><span>ravitaillements</span>
            </a>
  
         </li><!-- End Forms Nav -->
        </ul>
      </li><!-- End Charts Nav -->
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Livraisons Client</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="livraisonclt.php">
              <i class="bi bi-circle"></i><span>Livraisons</span>
            </a>
          </li>
          <li>
            <a href="client.php">
              <i class="bi bi-circle"></i><span>Clients</span>
            </a>
          </li>
          <li>
            <a href="boutique2.php">
              <i class="bi bi-circle"></i><span>Boutique</span>
            </a>
          </li>
          <li>
            <a href="produit1.php">
              <i class="bi bi-circle"></i><span>Produit</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="client.php">
          <i class="bi bi-person"></i>
          <span>Clients</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="vente.php">
          <i class="bi bi-question-circle"></i>
          <span>Achats</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
           <?php
                  $connection = mysqli_connect("localhost", "root", "");
                  $db = mysqli_select_db($connection, 'gestion_stock');
                  $idcommune = $_GET['modif'];

                  $query= "SELECT * FROM fournisseur where id_fournisseur='$idcommune' ";
                  $query_run = mysqli_query($connection, $query);

                  if($query_run)
                  {
                      while($row = mysqli_fetch_array($query_run))
                      {

                      ?>
   
    <section class="section">
      <div class="col-md-12">
      <div class="bg-transparent rounded h-100 p-4">
                        <h4> Modification des Fournisseurs</h4>
                    <hr>
            <form action="" method="post">
            <input type="hidden" name="id_fournisseur" value="<?php echo $row['id_fournisseur'] ?>">
                <div class="form-group mb-3">
                    <label for="">Nom</label>
                    <input type="text" name="nom_fournisseur" class="form-control" value="<?php echo $row['nom_fournisseur'] ?>" placeholder="Entrez nom " required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom_fournisseur" class="form-control" value="<?php echo $row['prenom_fournisseur'] ?>" placeholder="Entrez prenom" required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Contact</label>
                    <input type="int" name="contact_fournisseur" class="form-control" value="<?php echo $row['contact_fournisseur'] ?>" placeholder="Entrez contact" required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Mail</label>
                    <input type="text" name="mail_fournisseur" class="form-control" value="<?php echo $row['mail_fournisseur'] ?>" placeholder="Entrez mail" required> 

                </div>
                <div class="form-group mb-3">
                    <label for="">Pays</label>
                    <input type="text" name="pays_fournisseur" class="form-control" value="<?php echo $row['pays_fournisseur'] ?>" placeholder="Entrez pays" required> 

                </div>
                
                
                <button type="submit" name="modif" class="btn btn-primary">Modifier</button>
                <a href="fournisseur.php" class="btn btn-danger"> Annuler </a>
            </form>

            <?php
      $connection = mysqli_connect("localhost","root", "");
      $db = mysqli_select_db($connection, 'gestion_stock');

      if(isset($_POST['modif']))
      {
          $nomcommune= $_POST['nom_fournisseur'];
          $nbrehbt= $_POST['prenom_fournisseur'];
          $contact= $_POST['contact_fournisseur'];
          $mail= $_POST['mail_fournisseur'];
          $pays= $_POST['pays_fournisseur'];
          

          $query = "UPDATE fournisseur SET nom_fournisseur='$nomcommune', prenom_fournisseur='$nbrehbt', 
          contact_fournisseur= $contact, mail_fournisseur='$mail', pays_fournisseur='$pays' where id_fournisseur='$idcommune'";
          $query_run = mysqli_query($connection, $query);

          if($query_run)
          {
              echo '<script> alert("Modification effectuée"); </script>';
          }
          else
          {
            echo '<script> alert("Modification non effectué"); </script>';
          }
      }

?>

       
       </div>
      </div>
      <?php
                            
                        }
                    }
                    else{

                    }

                ?>
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