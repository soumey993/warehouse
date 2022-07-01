
    <section class="section">
      <div class="col-md-12">
      <h3>Gestion des Produits</h3>
     <hr>
    
     <button type="button" class="btn btn-success m-2">
        <a href="ajoutproduit.php" class="btn btn-success">Ajouter</a>
     </button>
                             
                    <?php

                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, 'gestion_stock');
                $query = "SELECT * FROM produit where etat=1";
                $query_run = mysqli_query($connection, $query);

                ?>

                <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nom Produit</th>
                                <th>Prix d'Achat</th>
                                <th>Prix de vente</th>
                                <th>Quantité Stock</th>
                                <th>Catégorie du Produit</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                            </thead>

                            <?php
                  $sql1 = "SELECT * FROM produit inner join categorie on  produit.id_categorie = categorie.id_categorie
                  where produit.etat=1";
                  $requete1 = mysqli_query($connection, $sql1);

                  if($requete1)
                  {
                       while($row = mysqli_fetch_array($requete1))
                       {
                  ?>

                        <tbody>
                        <tr>
                            <th> <?php echo $row['id_produit']; ?>  </th>
                            <th>  <?php echo $row['nom_produit']; ?> </th>
                            <th>  <?php echo $row['prix_achat']; ?> </th>
                            <th> <?php echo $row['prix_vente']; ?>   </th>
                            <th> <?php echo $row['quantite_stock']; ?>  </th>
                            <th>  <?php echo $row['libelle_categorie']; ?> </th>
                
                            <th>  <a href="modifproduit.php?modif=<?php echo $row['id_produit'] ?>" class="btn btn-primary"> Edit </a> </th>
                            <th>  <a href="suprimeproduit.php?supprime=<?php echo $row['id_produit'] ?>" class="btn btn-danger" onclick="return confirm('voulez-vous supprimer?')"> Delete </a> </th>
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

 