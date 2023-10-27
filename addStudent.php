
        <?php
         require ('config.php');

            try {

            $lastName= $_POST['lastname'];
            $firstName = $_POST['firstname'];
            $Phone =$_POST['phone'];
            $Address= $_POST ['address'];
            $Email= $_POST ['email'];
            $Classe= $_POST ['classe'];

            
            $sql="insert into personne(`nomPersonne`, `prenomPersonne`, `phonePersonne`,`addressPersonne`, `emailPersonne`, `classePersonne`) 
            values('$lastName','$firstName','$Phone','$Address','$Email','$Classe')";                 

            // use exec() because no results are returned
            $conn->exec($sql);
            
            header ('location: dashboard.php');
            echo '<script language="javascript">';
            echo 'alert("Utilisateur ajouté !")';
            echo '</script>';
            
            } 
         catch(PDOException $e) {
            echo  "<br>" . $e->getMessage();    
            }   
            //$conn = null;    
    ?>