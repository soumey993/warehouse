
    <?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'gestion_stock');
    $id = $_GET['supprime'];

       ?>


    <?php
         if(isset($_GET['supprime']))
         {
             
             $query = "UPDATE client SET etat = 0  WHERE id_client ='$id'   ";
             $query_run = mysqli_query($connection, $query);

             if($query_run)
             {
                echo '<script> alert("suppression effectuée effectuée"); </script>';
                header("location: ./?page=client");
             }
             else{
                echo '<script> alert("suppression non effectuée"); </script>';
             }
         }

    ?>





        <?php
?>
