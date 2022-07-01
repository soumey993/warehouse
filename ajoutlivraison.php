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
        <li>
            <a href="livraison.php" class="active">
              <i class="bi bi-circle"></i><span>livraisons</span>
            </a>
          </li>
          <li>
            <a href="magasin.php">
              <i class="bi bi-circle"></i><span>Magasin</span>
            </a>
          </li>
          <li>
            <a href="fournisseur.php">
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

   
    <section class="section">
      <div class="col-md-12">
      <div class="bg-transparent rounded h-100 p-4">
                        <h4> Enregistrement des Livraisons</h4>
                
                        <?php
                    $connection = mysqli_connect("localhost","root", "");
                    $db = mysqli_select_db($connection, 'gestion_stock');

                    if(isset($_POST['augmente']))
                    {
                       
                        $datel= $_POST['date_livraison_fournisseur'];
                        $idf= $_POST['id_fournisseur'];
                        $magasin= $_POST['id_magasin'];
                       
                        $query = "INSERT INTO livraison_fournisseur(date_livraison_fournisseur, id_fournisseur,id_magasin)
                         VALUES('$datel', $idf,$magasin)";
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
                    <hr>
              <form action="" method="post">
               
                     <div class="form-group mb-3">
                            <label for="nom_fournisseur">Fournisseur</label>
                            <select class="form-control" name="id_fournisseur">
                              <option value="">selectionnez le Nom du Fournisseur</option>
                                <?php
                                    $sqlcommunes = "select * from fournisseur where etat=1";
                                    $rqtcommune = mysqli_query($connection, $sqlcommunes);
                                    $Donnees = mysqli_fetch_all($rqtcommune); 
                                  
                                    foreach ($Donnees as $Donnee){
                                      echo "<option value='".$Donnee[0]. 
                                      " '> ".$Donnee[1]. " </option>";
                                      
                                    }
                                  ?>
                            </select>
                         </div>
                        
                      <div class="form-group mb-3">
                            <label for="nom_magasin">Magasin</label>
                            <select class="form-control" name="id_magasin">
                              <option value="">selectionnez le Magasin de destination</option>
                                <?php
                                    $sqlcommunes = "select * from magasin where etat=1";
                                    $rqtcommune = mysqli_query($connection, $sqlcommunes);
                                    $Donnees = mysqli_fetch_all($rqtcommune); 
                                  
                                    foreach ($Donnees as $Donnee){
                                      echo "<option value='".$Donnee[0]. 
                                      " '> ".$Donnee[1]. " </option>";
                                      
                                    }
                                  ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="date_livraison_fournisseur">Date livraison</label>
                            <input type="date" name="date_livraison_fournisseur" class="form-control" placeholder="Entrez date " required> 

                     </div>
               
                
                <button type="submit" name="augmente" class="btn btn-success">Enregistrer</button>
                <a href="livraison.php" class="btn btn-danger"> Annuler </a>
              </form>

        <div class="clearfix"></div>
        <h6 class="mb-4 my-4">Livraison déjà Enregistrées</h6>
        <table class="table table-bordered">
               <thead class="table-dark">
                 <tr>
                     <th>ID</th>
                     <th>Nom Fournisseur</th>
                     <th>Prenom Fournisseur</th>
                     <th>Magasin de stock</th>
                     <th>Date de livraison</th>
                    
                </tr>
                </thead>

                <tbody>
                  <?php
                  $sql1 = "SELECT * FROM livraison_fournisseur inner join magasin on livraison_fournisseur.id_magasin = magasin.id_magasin
                  inner join fournisseur on livraison_fournisseur.id_fournisseur=fournisseur.id_fournisseur where livraison_fournisseur.etat=1";
                  $requete1 = mysqli_query($connection, $sql1);
                  $Donnees = mysqli_fetch_all($requete1);
                  foreach($Donnees as $Donnee){ 
                        echo "<tr>
                        <th>$Donnee[0]</th>
                        <th>$Donnee[10]</th>
                        <th>$Donnee[11]</th>
                        <th>$Donnee[6]</th>
                        <th>$Donnee[1]</th>
                       
                     
                        
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