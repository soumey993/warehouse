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
                        <h4> Enregistrement des Livraisons</h4>
                
                        <?php
                    $connection = mysqli_connect("localhost","root", "");
                    $db = mysqli_select_db($connection, 'gestion_stock');

                    if(isset($_POST['augmente']))
                    {
                       
                        $datel= $_POST['id_livraison_fournisseur'];
                        $idf= $_POST['id_produit'];
                        $magasin= $_POST['quantite_livree_four'];
                       
                        $query = "INSERT INTO livraison_four_produit(id_livraison_fournisseur, id_produit,quantite_livree_four)
                         VALUES($datel, $idf,'$magasin')";
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
                            <label for="id_livraison_fournisseur">Livraison</label>
                            <select class="form-control" name="id_livraison_fournisseur">
                              <option value="">selectionnez le Numero du Fournisseur</option>
                                <?php
                                    $sqlcommunes = "select * from livraison_fournisseur where etat=1";
                                    $rqtcommune = mysqli_query($connection, $sqlcommunes);
                                    $Donnees = mysqli_fetch_all($rqtcommune); 
                                  
                                    foreach ($Donnees as $Donnee){
                                      echo "<option value='".$Donnee[0]. 
                                      " '> ".$Donnee[0]. " </option>";
                                      
                                    }
                                  ?>
                            </select>
                         </div>
                        
                      <div class="form-group mb-3">
                            <label for="nom_produit">Produit</label>
                            <select class="form-control" name="id_produit">
                              <option value="">selectionnez le Produit livre</option>
                                <?php
                                    $sqlcommunes = "select * from produit where etat=1";
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
                            <label for="quantite_livree_four">Quantite livree</label>
                            <input type="int" name="quantite_livree_four" class="form-control" placeholder="Entrez la quantite livree " required> 

                     </div>
               
                
                <button type="submit" name="augmente" class="btn btn-success">Enregistrer</button>
                <a href="./?page=affichagelivraison" class="btn btn-danger"> Annuler </a>
              </form>

        <div class="clearfix"></div>
        <h6 class="mb-4 my-4">Livraison déjà Enregistrées</h6>
        <table class="table table-bordered">
               <thead class="table-dark">
                 <tr>
                     <th>ID</th>
                     <th>Nom Fournisseur</th>
                     <th>Prenom Fournisseur</th>
                     <th>Contact Fournisseur</th>
                     <th>Nom Magasin</th>
                     <th>Adresse Magasin</th>
                     <th>Date de livraison</th>
                     <th>Produit livre</th>
                     <th>Quantite livree</th>
                    
                </tr>
                </thead>

                <tbody>
                  <?php
                  $sql1 = "SELECT * FROM livraison_fournisseur inner join magasin on 
                  livraison_fournisseur.id_magasin = magasin.id_magasin
                  inner join fournisseur on livraison_fournisseur.id_fournisseur=fournisseur.id_fournisseur 
                  inner join livraison_four_produit on livraison_four_produit.id_livraison_fournisseur=livraison_fournisseur.id_livraison_fournisseur
                  inner join produit on livraison_four_produit.id_produit=produit.id_produit where livraison_fournisseur.etat=1";
                  $requete1 = mysqli_query($connection, $sql1);
                  $Donnees = mysqli_fetch_all($requete1);
                  foreach($Donnees as $Donnee){ 
                        echo "<tr>
                        <th>$Donnee[0]</th>
                        <th>$Donnee[10]</th>
                        <th>$Donnee[11]</th>
                        <th>$Donnee[12]</th>
                        <th>$Donnee[6]</th>
                        <th>$Donnee[7]</th>
                        <th>$Donnee[1]</th>
                        <th>$Donnee[22]</th>
                        <th>$Donnee[19]</th>
                       
                     
                        
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