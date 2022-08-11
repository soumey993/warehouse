

   
    <section class="section">
      <div class="col-md-12">
      <h3>Gestion des Magasins</h3>
     <hr>
    
     <button type="button" class="btn btn-success m-2">
        <a href="ajoutmagasin.php" class="btn btn-success">Ajouter</a>
     </button>
                             
                    <?php

                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, 'gestion_stock');
                $query = "SELECT * FROM magasin where etat=1";
                $query_run = mysqli_query($connection, $query);

                ?>

                <table class="table table-bordered" style="background-color: white;">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nom  du Magasin</th>
                                <th>Adresse du Magasin</th>
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
                            <th> <?php echo $row['id_magasin']; ?>  </th>
                            <th>  <?php echo $row['nom_magasin']; ?> </th>
                            <th> <?php echo $row['adresse_magasin']; ?>   </th>
                          
                            <th>  <a href="modifmagasin.php?modif=<?php echo $row['id_magasin'] ?>" class="btn btn-primary"> Edit </a> </th>
                            <th>  <a href="suprimemagasin.php?supprime=<?php echo $row['id_magasin'] ?>" class="btn btn-danger" onclick="return confirm('voulez-vous supprimer?')"> Delete </a> </th>
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

 