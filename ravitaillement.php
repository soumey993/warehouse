
    <section class="section">
    <div class="col-md-12">
    <h3>Gestion des Ravitaillements</h3>
   <hr>
  
   <button type="button" class="btn btn-success m-2">
      <a href="ajoutravi.php" class="btn btn-success">Ajouter</a>
   </button>
                           
                  <?php

              $connection = mysqli_connect("localhost", "root", "");
              $db = mysqli_select_db($connection, 'gestion_stock');
              $query = "SELECT * FROM ravitaillement where etat=1";
              $query_run = mysqli_query($connection, $query);

              ?>

              <table class="table table-bordered" style="background-color: white;">
                      <thead class="table-dark">
                          <tr>
                              <th>ID</th>
                              <th>Date</th>
                              <th>Magasin</th>
                              <th>Boutique</th>
                            
                              <th>EDIT</th>
                              <th>DELETE</th>
                          </tr>
                          </thead>

                          <?php
                $sql1 = "SELECT * FROM ravitaillement inner join magasin on  ravitaillement.id_magasin = magasin.id_magasin
                inner join boutique on ravitaillement.id_boutique=boutique.id_boutique
                where ravitaillement.etat=1";
                $requete1 = mysqli_query($connection, $sql1);

                if($requete1)
                {
                     while($row = mysqli_fetch_array($requete1))
                     {
                ?>

                      <tbody>
                      <tr>
                          <th> <?php echo $row['id_ravitaillement']; ?>  </th>
                          <th>  <?php echo $row['date_ravitaillement']; ?> </th>
                          <th>  <?php echo $row['nom_magasin']; ?> </th>
                          <th> <?php echo $row['nom_boutique']; ?>   </th>
              
                          <th>  <a href="modifravi.php?modif=<?php echo $row['id_ravitaillement'] ?>" class="btn btn-primary"> Edit </a> </th>
                          <th>  <a href="suprimeravi.php?supprime=<?php echo $row['id_ravitaillement'] ?>" class="btn btn-danger" onclick="return confirm('voulez-vous supprimer?')"> Delete </a> </th>
                          
                     
                          </tr>
                          </tbody>

                      <?php
                              
                          }
                      }
                      else
                      {
                          echo " No record found";

                      }
                      ?> 
          </table> 

    </div>
  </section>

