     
     <section class="section">
      <div class="col-md-12">
      <div class="bg-transparent rounded h-100 p-4">
       <h3>Gestion des Livraisons</h3>
            <hr>

            <button type="button" class="btn btn-success m-2">
            <a href="ajoutlivraison.php" class="btn btn-success">Ajouter</a>
           </button>
          <br>
          
     <?php

        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'gestion_stock');
        $query = "SELECT * FROM livraison_fournisseur where etat=1";
        $query_run = mysqli_query($connection, $query);

     ?>
    <table class="table table-bordered" style="background-color: transparent;">
               <thead class="table-dark">
                 <tr>
                     <th>ID Livraison</th>
                     <th>Nom Fournisseur </th>
                     <th>Prenom Fournisseur </th>
                     <th>Magasin</th>
                     <th>Date de Livraison</th>
                     <th>EDIT</th>
                     <th>DELETE</th>
                </tr>
                </thead>
              <?php
                  $sql1 = "SELECT * FROM livraison_fournisseur inner join magasin on 
                  livraison_fournisseur.id_magasin = magasin.id_magasin
                  inner join fournisseur on livraison_fournisseur.id_fournisseur=fournisseur.id_fournisseur 
                  where livraison_fournisseur.etat=1";
                  $requete1 = mysqli_query($connection, $sql1);

                  if($requete1)
                  {
                       while($row = mysqli_fetch_array($requete1))
                       {
                  ?>
                        <tbody>
                            <tr>
                                <th> <?php echo $row['id_livraison_fournisseur']; ?>  </th>
                                <th>  <?php echo $row['nom_fournisseur']; ?> </th>
                                <th>  <?php echo $row['prenom_fournisseur']; ?> </th>
                                <th> <?php echo $row['nom_magasin']; ?>   </th>
                                <th> <?php echo $row['date_livraison_fournisseur']; ?>  </th>
                               
                                <th>  <a href="modiflivraison.php?modif=<?php echo $row['id_livraison_fournisseur'] ?>" 
                                class="btn btn-primary"> Edit </a> </th>
                                <th>  <a href="suprimelivraison.php?supprime=<?php echo $row['id_livraison_fournisseur'] ?>" 
                                class="btn btn-danger" onclick="return confirm('voulez-vous supprimer?')"> Delete </a> </th>
                     <!--
                   <form action="modifcommune.php" method="post">  
                       <input type="hidden" name="idcommune" value="<?php echo $row['idcommune'] ?>">
                      <th> <input type="submit" name="edit" class="btn btn-success" value="EDIT">  </th>

                  </form> 

                  <form action="suprimecommune.php" method="post">  
                       <input type="hidden" name="idcommune" value="<?php echo $row['idcommune'] ?>">
                      <th> <input type="submit" name="suprime" class="btn btn-danger" value="DELETE">  </th>

                  </form>    
                 -->
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
