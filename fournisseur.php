
    <section class="section">
      <div class="col-md-12">
      <h3>Gestion des Fournisseurs</h3>
     <hr>
    
     <button type="button" class="btn btn-success m-2">
        <a href="ajoutfournisseur.php" class="btn btn-success">Ajouter</a>
     </button>
                             
                    <?php

                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, 'gestion_stock');
                $query = "SELECT * FROM fournisseur where etat=1";
                $query_run = mysqli_query($connection, $query);

                ?>

                <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Contact</th>
                                <th>Mail</th>
                                <th>Pays</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                            </thead>
                    <?php

                    if($query_run)
                    {
                        while($row = mysqli_fetch_array($query_run))
                        {
                    ?>
                        <tbody>
                        <tr>
                            <th> <?php echo $row['id_fournisseur']; ?>  </th>
                            <th>  <?php echo $row['nom_fournisseur']; ?> </th>
                            <th>  <?php echo $row['prenom_fournisseur']; ?> </th>
                            <th> <?php echo $row['contact_fournisseur']; ?>   </th>
                            <th> <?php echo $row['mail_fournisseur']; ?>  </th>
                            <th>  <?php echo $row['pays_fournisseur']; ?> </th>
                           
                          
                            <th>  <a href="modiffournisseur.php?modif=<?php echo $row['id_fournisseur'] ?>" class="btn btn-primary"> Edit </a> </th>
                            <th>  <a href="suprimefournisseur.php?supprime=<?php echo $row['id_fournisseur'] ?>" class="btn btn-danger" onclick="return confirm('voulez-vous supprimer?')"> Delete </a> </th>
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
