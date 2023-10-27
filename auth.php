<?php
    require('config.php');
    $query= $conn->prepare("SELECT*FROM personne WHERE emailPersonne = ?");
    $query->execute([$_POST['email']]);
    $users=$query->fetch();
 

   

    if ($users &&($_POST["password"] == $users['passwordPersonne'])){
       // echo 'users est renseigné';

       header ('location: dashboard.php');  
       session_start();
       $_SESSION['emailPersonne']=$users['emailPersonne'];
       
       
    }

    else{

    //echo 'users est vide';
    header ('location: index.php');
    };
     


    ?>